<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ECHRLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('echr_links')->insert([
            [
                'name_en' => 'Official representatives of RA in ECHR',
                'name_am' => 'ՀՀ պաշտոնական ներկայացուցչությունը ՄԻԵԴ֊ում',
                'name_ru' => 'Официальное представительство РА в Европейском Суде по Правам Человека',
                'link' => 'https://www.echr.am/en/home.html',
            ],
        ]);
    }
}
