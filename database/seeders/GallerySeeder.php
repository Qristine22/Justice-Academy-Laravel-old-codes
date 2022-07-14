<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'text_en' => '24.02.2014 - Preparatory work օn the eve of the Academy\'s official opening',
                'text_am' => '24.02.2014 - Նախապատրաստական աշխատանքներ՝ Ակադեմիայի պաշտոնական բացմանն ընդառաջ',
                'text_ru' => '24.02.2014 - Подготовительные работы  в преддверии официального открытия Академии',
                'full_date' => '24.02.2014',
                'year' => '2014',
            ],
            [
                'text_en' => '24.02.2014 - Preparatory work օn the eve of the Academy\'s official opening',
                'text_am' => '24.02.2014 - Նախապատրաստական աշխատանքներ՝ Ակադեմիայի պաշտոնական բացմանն ընդառաջ',
                'text_ru' => '24.02.2014 - Подготовительные работы  в преддверии официального открытия Академии',
                'full_date' => '24.02.2015',
                'year' => '2015',
            ],
            [
                'text_en' => '24.02.2014 - Preparatory work օn the eve of the Academy\'s official opening',
                'text_am' => '24.02.2014 - Նախապատրաստական աշխատանքներ՝ Ակադեմիայի պաշտոնական բացմանն ընդառաջ',
                'text_ru' => '24.02.2014 - Подготовительные работы  в преддверии официального открытия Академии',
                'full_date' => '24.02.2016',
                'year' => '2016',
            ],
        ]);
    }
}
