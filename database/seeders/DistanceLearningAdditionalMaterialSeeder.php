<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistanceLearningAdditionalMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distance_learning_additional_materials')->insert([
            [
                'name_en' => 'Դաս 1',
                'name_am' => 'Դաս 1',
                'name_ru' => 'Դաս 1',
                'course_id' => '1',
            ],
            [
                'name_en' => 'Դաս 2',
                'name_am' => 'Դաս 2',
                'name_ru' => 'Դաս 2',
                'course_id' => '1',
            ],
            [
                'name_en' => 'Դաս 1',
                'name_am' => 'Դաս 1',
                'name_ru' => 'Դաս 1',
                'course_id' => '2',
            ],
        ]);
    }
}
