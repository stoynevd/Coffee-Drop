<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Jabranr\PostcodesIO\PostcodesIO;
use App\Models\Calculation;
use App\Models\Location;
use App\Models\Location\Time as LocationTime;
use Illuminate\Support\Str;

class ActionController extends Controller {
    public function getNearestLocation($postcode) {
        $postcodeFinder = new PostcodesIO();
        // if(strlen($postcode) > 8) {
        //     return response()->json(['success' => false, 'message' => 'Invalid postcode.']);
        // }
        if (!$postcodeFinder->validate($postcode)) {
            return response()->json(['success' => false, 'message' => 'Invalid postcode.']);
        }
        $response = json_decode(json_encode($postcodeFinder->find($postcode)), true);
        if($response['status'] == 200) {
            $long = $response['result']['longitude'];
            $lat = $response['result']['latitude'];
            $result = ['distance' => 1000, 'location' => null];
            foreach(Location::all() as $location) {
                $distance = 3959 * acos(
                    cos( deg2rad($lat) )*
                    cos( deg2rad($location->lat) ) *
                    cos( deg2rad($location->long) - deg2rad($long) ) +
                    sin( deg2rad($lat) ) *
                    sin( deg2rad($location->lat) )
                );
                if($distance < 100 && $distance < $result['distance']) {
                    $result['distance'] = number_format($distance, 2, '.', '');
                    $result['location'] = $location;
                }
            }
            if($result['distance'] < 1000) {
                $result['location']->load('times');
                return response()->json(['success' => true, 'result' => $result]);
            }
            return response()->json(['success' => false, 'message' => 'There were no locations in a radius of 1000 miles.']);
        }
        return response()->json(['success' => false, 'message' => 'Postcode not found.']);
    }

    public function createNewLocation(Request $request) {
        $validator = Validator::make($request->all(), [
            'postcode'      => 'bail|required|max:8',
            'opening_times' => 'bail|required|array',
            'closing_times' => 'bail|required|array'
        ]);
        if($validator->fails()) {
            return $this->returnCustomJsonValidatorError($validator);
        }
        $postcodeFinder = new PostcodesIO();
        if (!$postcodeFinder->validate($postcode)) {
            return response()->json(['success' => false, 'message' => 'Invalid postcode.']);
        }
        $response = json_decode(json_encode($postcodeFinder->find($request->input('postcode'))), true);
        if($response['status'] == 200) {
            $long = $response['result']['longitude'];
            $lat = $response['result']['latitude'];
            $location = Location::create([
                'postcode'  => $request->input('postcode'),
                'long'      => $long,
                'lat'       => $lat
            ]);
            foreach($request->input('opening_times') as $key => $openingTime) {
                if(!is_null($openingTime) && !is_null($request->input('closing_times')[$key])) {
                    LocationTime::create([
                        'location_id'   => $location->id,
                        'day'           => $key,
                        'opening'       => $openingTime,
                        'closing'       => $request->input('closing_times')[$key]
                    ]);
                }
            }
            return response()->json(['success' => true, 'message' => 'Location successfully added.']);
        }
        return response()->json(['success' => false, 'message' => 'Postcode not found.']);
    }

    public function calculateCashback(Request $request) {
        $validator = Validator::make($request->all(), [
            'Ristretto'     => 'bail|required|integer|min:0',
            'Espresso'      => 'bail|required|integer|min:0',
            'Lungo'         => 'bail|required|integer|min:0'
        ]);
        if($validator->fails()) {
            return $this->returnCustomJsonValidatorError($validator);
        }
        $ristretto = $request->input('Ristretto');
        $espresso = $request->input('Espresso');
        $lungo = $request->input('Lungo');
        $amount = $this->calculateCoffeeCashback('ristretto', $ristretto);
        $amount += $this->calculateCoffeeCashback('espresso', $espresso);
        $amount += $this->calculateCoffeeCashback('lungo', $lungo);
        Calculation::create([
            'name'          => str_random(16),
            'ristretto'     => $ristretto,
            'espresso'      => $espresso,
            'lungo'         => $lungo,
            'amount'        => $amount
        ]);
        $cashback = number_format(($amount/100), 2, '.', ' ');
        return response()->json(['success' => true, 'message' => 'Your total cashback is £' . $cashback . '.']);
    }

    public function getLastCalculations() {
        $lastCalculations = Calculation::orderBy('id', 'desc')->take(5)->get();
        return response()->json(['success' => true, 'lastCalculations' => $lastCalculations]);
    }

    // Helper functions
    public function calculateCoffeeCashback($type, $capsules) {
        $amount = 0;
        $coffees = [
            'ristretto' => [2, 3, 5],
            'espresso'  => [3, 6, 9],
            'lungo'     => [5, 10, 15]
        ];
        if($capsules <= 50) {
            $amount += $capsules * $coffees[$type][0];
        }
        elseif ($capsules > 50 && $capsules <= 500) {
            $amount += 50 * $coffees[$type][0];
            $amount += ($capsules - 50) * $coffees[$type][1];
        }
        else {
            $amount += 50 * $coffees[$type][0];
            $amount += 450 * $coffees[$type][1];
            $amount += ($capsules - 500) * $coffees[$type][3];
        }
        return $amount;
    }
}
