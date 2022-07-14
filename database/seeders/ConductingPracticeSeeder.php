<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConductingPracticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conducting_practices')->insert([
            [
                'name_en' => 'Order',
                'name_am' => 'Կարգ',
                'name_ru' => 'Порядок',
                'pdf' => 'full-time-education/conducting-practices/55P3fKAH7uKiCmyFrz3imZr7jPftd1vUZHwUSnv5.pdf',
            ],
        ]);
    }
}
