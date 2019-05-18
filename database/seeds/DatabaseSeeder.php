<?php

use Illuminate\Database\Seeder;
use App\Models\Location;
use App\Models\Location\Time as LocationTime;

class DatabaseSeeder extends Seeder
{
    public function run() {
        $location = Location::create(['postcode' => 'LA17 7UY', 'long' => '-3.183904', 'lat' => '54.245406']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'tuesday',   'opening' => '10:00',   'closing' => '19:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'thursday',  'opening' => '10:00',   'closing' => '19:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'saturday',  'opening' => '10:00',   'closing' => '19:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'sunday',    'opening' => '09:00',   'closing' => '16:00']);

        $location = Location::create(['postcode' => 'LL27 0YX', 'long' => '-3.849774', 'lat' => '53.135987']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'tuesday',   'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'friday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'saturday',  'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'sunday',    'opening' => '09:00',   'closing' => '16:00']);

        $location = Location::create(['postcode' => 'M46 9PU',  'long' => '-2.495199', 'lat' => '53.532582']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'tuesday',   'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'thursday',  'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'friday',    'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'saturday',  'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'sunday',    'opening' => '08:30',   'closing' => '17:30']);

        $location = Location::create(['postcode' => 'NE68 7TQ', 'long' => '-1.653924', 'lat' => '55.580722']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'saturday',  'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'sunday',    'opening' => '08:30',   'closing' => '17:30']);

        $location = Location::create(['postcode' => 'WN6 0QG',  'long' => '-2.672335', 'lat' => '53.595427']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'tuesday',   'opening' => '10:00',   'closing' => '19:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '10:00',   'closing' => '19:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'thursday',  'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'friday',    'opening' => '10:00',   'closing' => '19:00']);

        $location = Location::create(['postcode' => 'SE9 1QR',  'long' => '0.065182', 'lat' => '51.458827']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'tuesday',   'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'thursday',  'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'friday',    'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'saturday',  'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'sunday',    'opening' => '08:30',   'closing' => '17:30']);

        $location = Location::create(['postcode' => 'OL8 4NJ',  'long' => '-2.12999', 'lat' => '53.526373']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'tuesday',   'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'friday',    'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'saturday',  'opening' => '08:30',   'closing' => '17:30']);

        $location = Location::create(['postcode' => 'UB5 6NQ',  'long' => '-0.400943', 'lat' => '51.535225']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'tuesday',   'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'saturday',  'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'sunday',    'opening' => '08:30',   'closing' => '17:30']);

        $location = Location::create(['postcode' => 'PA3 1BT',  'long' => '-4.458247', 'lat' => '55.845312']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'tuesday',   'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'thursday',  'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'friday',    'opening' => '08:30',   'closing' => '17:30']);

        $location = Location::create(['postcode' => 'EH17 8BB', 'long' => '-3.157093', 'lat' => '55.897571']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'tuesday',   'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'friday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'saturday',  'opening' => '09:00',   'closing' => '16:00']);

        $location = Location::create(['postcode' => 'EH5 1JS',  'long' => '-3.235406', 'lat' => '55.977473']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'tuesday',   'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'friday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'sunday',    'opening' => '09:00',   'closing' => '16:00']);

        $location = Location::create(['postcode' => 'S17 3LT',  'long' => '-1.523358', 'lat' => '53.321067']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'thursday',  'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'sunday',    'opening' => '09:00',   'closing' => '16:00']);

        $location = Location::create(['postcode' => 'HD4 7LT',  'long' => '-1.796846', 'lat' => '53.621557']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'thursday',  'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'friday',    'opening' => '08:30',   'closing' => '17:30']);

        $location = Location::create(['postcode' => 'NE4 6BP',  'long' => '-1.627668', 'lat' => '54.975028']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'friday',    'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'saturday',  'opening' => '08:30',   'closing' => '17:30']);

        $location = Location::create(['postcode' => 'CH45 0JS', 'long' => '-3.057475', 'lat' => '53.433603']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'thursday',  'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'saturday',  'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'sunday',    'opening' => '08:30',   'closing' => '17:30']);

        $location = Location::create(['postcode' => 'CT15 6JJ', 'long' => '1.369907', 'lat' => '51.15477']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'monday',    'opening' => '08:30',   'closing' => '17:30']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'wednesday', 'opening' => '09:00',   'closing' => '16:00']);
        LocationTime::create(['location_id' => $location->id, 'day' => 'sunday',    'opening' => '08:30',   'closing' => '17:30']);
    }
}
