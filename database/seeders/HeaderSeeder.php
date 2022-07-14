<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                'name_en' => 'About Academy',
                'name_am' => 'Ակադեմիայի մասին',
                'name_ru' => 'Об Академии',
                'link' => 'about',
            ],
            [
                'name_en' => 'News',
                'name_am' => 'Նորություններ',
                'name_ru' => 'Новости',
                'link' => 'news',
            ],
            [
                'name_en' => 'Full-time education',
                'name_am' => 'Առկա ուսուցում',
                'name_ru' => 'Очное обучение',
                'link' => 'full-time-education',
            ],
            [
                'name_en' => 'Distance learning',
                'name_am' => 'Հեռաուսուցում',
                'name_ru' => 'Дистанционное обучение',
                'link' => 'distance-learning',
            ],
            [
                'name_en' => 'Library',
                'name_am' => 'Գրադարան',
                'name_ru' => 'Библиотека',
                'link' => 'library',
            ],
            [
                'name_en' => 'BULLETIN',
                'name_am' => 'ԲԱՆԲԵՐ',
                'name_ru' => 'ВЕСТНИК',
                'link' => 'bulletin',
            ],
            [
                'name_en' => 'Partners',
                'name_am' => 'Գործընկերներ',
                'name_ru' => 'Партнеры',
                'link' => 'partners',
            ],
            [
                'name_en' => 'Contacts',
                'name_am' => 'Հետադարձ կապ',
                'name_ru' => 'Обратная связь',
                'link' => 'contacts',
            ],
        ]);
    }
}
