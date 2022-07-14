<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotivationalVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivational_videos')->insert([
            [
                'name_en' => 'Դաս 1',
                'name_am' => 'Դաս 1',
                'name_ru' => 'Դաս 1',
                'video' => '<iframe src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0" width="640" height="352" frameborder="0" allowfullscreen="" data-mce-src="https://player.vimeo.com/video/165433525?title=0&amp;byline=0&amp;portrait=0"></iframe>',
                'course_id' => 1,
            ],
            [
                'name_en' => 'Դաս 2',
                'name_am' => 'Դաս 2',
                'name_ru' => 'Դաս 2',
                'video' => '<iframe src="https://player.vimeo.com/video/166183816?title=0&amp;byline=0&amp;portrait=0" width="640" height="352" frameborder="0" allowfullscreen="" data-mce-src="https://player.vimeo.com/video/166183816?title=0&amp;byline=0&amp;portrait=0"></iframe>',
                'course_id' => 1,
            ],
            [
                'name_en' => 'Դաս 3',
                'name_am' => 'Դաս 3',
                'name_ru' => 'Դաս 3',
                'video' => '<iframe src="https://player.vimeo.com/video/166815765?title=0&amp;byline=0&amp;portrait=0" width="640" height="352" frameborder="0" allowfullscreen="" data-mce-src="https://player.vimeo.com/video/166815765?title=0&amp;byline=0&amp;portrait=0"></iframe>',
                'course_id' => 1,
            ],
            [
                'name_en' => 'Դաս 4',
                'name_am' => 'Դաս 4',
                'name_ru' => 'Դաս 4',
                'video' => '<iframe src="https://player.vimeo.com/video/167875707?title=0&amp;byline=0&amp;portrait=0" width="640" height="352" frameborder="0" allowfullscreen="" data-mce-src="https://player.vimeo.com/video/167875707?title=0&amp;byline=0&amp;portrait=0"></iframe>',
                'course_id' => 1,
            ],
        ]);
    }
}
