<?php

use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = "https://raw.githubusercontent.com/flores-jacob/philippine-regions-provinces-cities-municipalities-barangays/master/philippine_provinces_cities_municipalities_and_barangays_2019v2.json";

        echo "Fetching https://github.com/flores-jacob/philippine-regions-provinces-cities-municipalities-barangays \n";

        $client = new Client();
        $res = $client->request('GET', $url, [

        ]);

        $body = $res->getBody();

        $regions = json_decode($body, true);

        foreach ($regions as $region_key => $regions) {
            echo "Saving: " . $region_key . "\n";

            $region = new \App\Region();
            $region->name = $region_key;
            $region->save();

            foreach ($regions['province_list'] as $province_key => $provinces) {
                echo '          ' . "Saving: " . $province_key . "\n";

                $province = new \App\Province();
                $province->region_id = $region->id;
                $province->name = $province_key;
                $province->save();

                foreach ($provinces['municipality_list'] as $municipality_key => $municipalities) {
                    echo '               ' . "Saving: " . $municipality_key . "\n";

                    $municipality = new \App\Municipality();
                    $municipality->province_id = $province->id;
                    $municipality->name = $municipality_key;
                    $municipality->save();

                    foreach ($municipalities['barangay_list'] as $barangays) {
                        echo '                    ' . "Saving: " . $barangays . "\n";

                        $barangay = new \App\Barangay();
                        $barangay->municipality_id = $municipality->id;
                        $barangay->name = $barangays;
                        $barangay->save();
                    }
                }
            }
        }
    }
}
