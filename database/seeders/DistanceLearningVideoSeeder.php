<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistanceLearningVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distance_learning_videos')->insert([
            [
                'name_en' => 'Interview of Director of International Judicial Relations Department of US Federal Judicial Center about distance programs and training materials of the Academy of justice',
                'name_am' => 'ԱՄՆ Դաշնային դատական կենտրոնի միջազգային դատական կապերի գծով ղեկավարի հարցազրույցը Արդարադատության ակադեմիայի հեռաուսուցման ծրագրերի և նյութերի մասին',
                'name_ru' => 'Интервью с директором управления международных судебных связей  американского Федерального судебного центра относительно программ  и материалов дистанционного обучения  в Академии юстиции',
                'video' => '<iframe src="https://player.vimeo.com/video/144792674?title=0&amp;byline=0&amp;portrait=0" frameborder="0" allowfullscreen="" data-mce-src="https://player.vimeo.com/video/144792674?title=0&amp;byline=0&amp;portrait=0"></iframe>',
            ],
        ]);
    }
}
