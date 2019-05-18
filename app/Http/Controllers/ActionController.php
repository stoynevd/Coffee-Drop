<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Jabranr\PostcodesIO\PostcodesIO;
use App\Models\Location;

class ActionController extends Controller {
    public function getNearestLocation($postcode) {
        if(strlen($postcode) > 8) {
            return response()->json(['success' => false, 'message' => 'Invalid postcode.']);
        }
        $postcodeFinder = new PostcodesIO();
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
            'closing_times' => 'bail|required|array',
        ]);
        if($validator->fails()) {
            return $this->returnCustomJsonValidatorError($validator);
        }
        $postcodeFinder = new PostcodesIO();
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
                LocationTime::create([
                    'location_id'   => $location->id,
                    'day'           => $key,
                    'opening'       => $openingTime,
                    'closing'       => $request->input('closing_times')[$key]
                ]);
            }
        }
        return response()->json(['success' => false, 'message' => 'Postcode not found.']);
    }

    public function calculateCashback(Request $request) {
        $validator = Validator::make($request->all(), [
            ''     => 'bail|required',
        ]);
        if($validator->fails()) {
            return $this->returnCustomJsonValidatorError($validator);
        }
    }
}
