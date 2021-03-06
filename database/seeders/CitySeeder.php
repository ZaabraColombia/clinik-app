<?php

namespace Database\Seeders;

use App\Models\System\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::query()->truncate();
        $csvFile = fopen(base_path("database/data/cities.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                //dd($data[22]);
                City::query()->create([
                    "code"          => !empty($data[0]) ? "$data[0]":null,
                    "name"          => !empty($data[1]) ? $data[1]:null,
                    "type"          => !empty($data[2]) ? $data[2]:null,
                    "department_id" => !empty($data[3]) ? $data[3]:null
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
