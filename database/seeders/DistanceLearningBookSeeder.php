<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistanceLearningBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distance_learning_books')->insert([
            [
                'name_en' => 'Հեռաուսուցման ձեռնարկ',
                'name_am' => 'Հեռաուսուցման ձեռնարկ',
                'name_ru' => 'Հեռաուսուցման ձեռնարկ',
                'img' => 'distance-learning/books/JiaKa1I7tvUIprSEYEEp5Nmka3g2RX1UeQb5zKAe.png',
                'course_id' => '1',
            ],
            [
                'name_en' => 'Տերմինների բառարան',
                'name_am' => 'Տերմինների բառարան',
                'name_ru' => 'Տերմինների բառարան',
                'img' => 'distance-learning/books/90ilSsrACIsOTQ9lVKXFaKm6WndAIex5p6fIgWCe.jpg',
                'course_id' => '1',
            ],
        ]);
    }
}
