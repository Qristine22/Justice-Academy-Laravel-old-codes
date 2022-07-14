<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistanceLearningAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distance_learning_assignments')->insert([
            [
                'name_en' => 'Առաջադրանք',
                'name_am' => 'Առաջադրանք',
                'name_ru' => 'Առաջադրանք',
                'link' => 'distance-learning/assignments/3cCxrvbvBOaHpEqAKKturnlhliQw21bWszznG0qB.pdf',
                'course_id' => '1',
            ],
            [
                'name_en' => 'Առաջադրանք',
                'name_am' => 'Առաջադրանք',
                'name_ru' => 'Առաջադրանք',
                'link' => 'distance-learning/assignments/7rU4B0HPDqfyXwNE6McfI7yxe3WtTGqHhvb5GYkA.pdf',
                'course_id' => '3',
            ],
        ]);
    }
}
