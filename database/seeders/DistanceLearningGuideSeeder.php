<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistanceLearningGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distance_learning_guides')->insert([
            [
                'name_en' => 'Distance learning Guide',
                'name_am' => 'Հեռաուսուցման ուղեցույց',
                'name_ru' => 'Руководство по дистанционному обучению',
                'img' => 'distance-learning/guide/BBxc3y7sxDyWY0yip8V96FrdETHgENK7OiBMwUR4.png',
                'pdf' => 'distance-learning/guide/BF6LDuDmsurAfe8zec1jZjmr3DUdob150rxYts7k.pdf',
            ],
        ]);
    }
}
