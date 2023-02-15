<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cities = [
            ['name' => 'New York',       'country_id' => 1,  'lat' => 40.7128, 'lng' => -74.0060, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'London',         'country_id' => 2,  'lat' => 51.5072, 'lng' => -0.1275,  'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Tokyo',          'country_id' => 3,  'lat' => 35.6895, 'lng' => 139.6917,'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Shanghai',       'country_id' => 4,  'lat' => 31.2304, 'lng' => 121.4737,'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Mexico City',    'country_id' => 9,  'lat' => 19.4326, 'lng' => -99.1332, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Osaka',          'country_id' => 3,  'lat' => 34.6937, 'lng' => 135.5022,'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Los Angeles',    'country_id' => 1,  'lat' => 34.0522, 'lng' => -118.2437,'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Rio de Janeiro', 'country_id' => 10, 'lat' => -22.911111, 'lng' => -43.1729, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Istanbul',       'country_id' => 7,  'lat' => 41.0100, 'lng' => 28.9602,  'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Roma',           'country_id' => 8,  'lat' => 41.9028, 'lng' => 12.4964, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Moscow',         'country_id' => 5,  'lat' => 55.7558, 'lng' => 37.6173, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Kiev',           'country_id' => 11, 'lat' => 50.4501, 'lng' => 30.5234, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['name' => 'Berlin',         'country_id' => 6,  'lat' => 52.5200, 'lng' => 13.4049, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()]
        ];

        DB::table('cities')->insert($cities);

    }
}
