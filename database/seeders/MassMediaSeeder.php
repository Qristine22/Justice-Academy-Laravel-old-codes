<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MassMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mass_media')->insert([
            [
                'text_en' => 'Diplomas to the first graduates 19.12.2014',
                'text_am' => 'Դիպլոմներ առաջին շրջանավարտներին 19.12.2014',
                'text_ru' => 'Дипломы первым выпускникам 19.12.2014',
                'year' => '2014',
            ],
            [
                'text_en' => 'Тhe training process of 2015 has been launched 24.02.2015',
                'text_am' => 'Մեկնարկեց 2015 թվականի ուսումնական գործընթացը 24.02.2015',
                'text_ru' => 'Началась учебный процесс 2015 года 24.02.2015',
                'year' => '2015',
            ],
        ]);
    }
}
