<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_staff')->insert([
            [
                'position_en' => 'Rector',
                'position_am' => 'Ռեկտոր',
                'position_ru' => 'Ректор',
                'name_en' => 'Sergey Arakelyan',
                'name_am' => 'Սերգեյ Առաքելյան',
                'name_ru' => 'Сергей Аракелян',
                'phone' => '060 46 00 87',
                'mail' => 'rector@justiceacademy.am',
            ],
            [
                'position_en' => 'Reception',
                'position_am' => 'Ռեկտորի ընդունարան',
                'position_ru' => 'Приемная ректора',
                'name_en' => 'Anahit Margaryan (Assistant to the Rector - Secretary to the Governing Board)',
                'name_am' => 'Անահիտ Մարգարյան (ռեկտորի օգնական - Կառավարման խորհրդի քարտուղար)',
                'name_ru' => 'Анаит Маргарян (помощник ректора - Секретарь Совета правления)',
                'phone' => '060 46 00 87',
                'mail' => 'anahit.margaryan@justiceacademy.am',
            ],
            [
                'position_en' => 'Vice-rector',
                'position_am' => 'Պրոռեկտոր',
                'position_ru' => 'Проректор',
                'name_en' => null,
                'name_am' => null,
                'name_ru' => null,
                'phone' => '060 46 00 77',
                'mail' => null,
            ],
            [
                'position_en' => 'Chief of Staff',
                'position_am' => 'Աշխատակազմի ղեկավար',
                'position_ru' => 'Руководитель аппарата',
                'name_en' => 'Robert Shahinyan',
                'name_am' => 'Ռոբերտ Շահինյան',
                'name_ru' => 'Роберт Шагинян',
                'phone' => '060 46 00 89',
                'mail' => 'robert.shahinyan@justiceacademy.am',
            ],
            [
                'position_en' => 'Head of the Unit of Finance-senior accountant',
                'position_am' => 'Ֆինանսական բաժնի ղեկավար-գլխավոր հաշվապահ',
                'position_ru' => 'Руководитель финансового отдела-главный бухгалтер',
                'name_en' => 'Narine Harutyunyan',
                'name_am' => 'Նարինե Հարությունյան',
                'name_ru' => 'Нарине Арутюнян',
                'phone' => '060 46 00 94',
                'mail' => 'narine.harutyunyan@justiceacademy.am',
            ],
            [
                'position_en' => 'Advisor to the Rector',
                'position_am' => 'Ռեկտորի խորհրդական',
                'position_ru' => 'Советник ректора',
                'name_en' => 'Gevorg Israyelyan',
                'name_am' => 'Գևորգ Իսրայելյան',
                'name_ru' => 'Геворг Исраелян',
                'phone' => '060 46 00 84',
                'mail' => 'gevorg.israyelyan@justiceacademy.am',
            ],
        ]);
    }
}
