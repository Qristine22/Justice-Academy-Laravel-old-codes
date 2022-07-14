<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademyStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academy_structures')->insert([
            [
                'name_en' => 'GOVERNING BOARD',
                'name_am' => 'ԿԱՌԱՎԱՐՄԱՆ ԽՈՐՀՈՒՐԴ',
                'name_ru' => 'СОВЕТ ПРАВЛЕНИЯ',
                'link' => 'about/governing-board',
            ],
            [
                'name_en' => '<p>RECTOR</p>',
                'name_am' => '<p>ՌԵԿՏՈՐ</p>',
                'name_ru' => '<p>РЕКТОР</p>',
                'link' => 'about/rector',
            ],
            [
                'name_en' => 'RECTOR\'S</p><p>ADVISOR</p>',
                'name_am' => '<p>ՌԵԿՏՈՐԻ</p><p>ԽՈՐՀՐԴԱԿԱՆ</p>',
                'name_ru' => '<p>СОВЕТНИК</p><p>РЕКТОРА</p>',
                'link' => null,
            ],
            [
                'name_en' => '<p>VICE - RECTOR</p>',
                'name_am' => '<p>ՊՐՈՌԵԿՏՈՐ</p>',
                'name_ru' => '<p>ПРОРЕКТОР</p>',
                'link' => 'about/academy-structure/vice-rector',
            ],
            [
                'name_en' => '<p>CHIEF OF</p><p>STAFF</p>',
                'name_am' => '<p>ԱՇԽԱՏԱԿԱԶՄԻ</p><p>ՂԵԿԱՎԱՐ</p>',
                'name_ru' => '<p>РУКОВОДИТЕЛЬ</p><p>АППАРАТА</p>',
                'link' => 'about/academy-structure/chief-of-staff',
            ],
            [
                'name_en' => '<p>DEPARTMENT OF DISTANCE</p><p>LEARNING AND IT</p>',
                'name_am' => '<p>ՀԵՌԱՈՒՍՈՒՑՄԱՆ ԵՎ</p><p>ՏՏ ԴԵՊԱՐՏԱՄԵՆՏ</p>',
                'name_ru' => '<p>ДЕПАРТАМЕНТ ДИСТАН-</p><p>ЦИОННОГО ОБУЧЕНИЯ И ИТ</p>',
                'link' => 'about/academy-structure/distance-learning',
            ],
            [
                'name_en' => '<p>Bulletin of the</p><p>Academy of Justice</p>',
                'name_am' => '<p>Բանբեր</p><p>Արդարադատության</p><p>ակադեմիայի</p>',
                'name_ru' => '<p>Вестник Академии</p><p>юстиции</p>',
                'link' => 'bulletin',
            ],
            [
                'name_en' => '<p>Unit of Organization of Scientific</p><p>Research and Programmatic-</p><p>methodological Activities</p>',
                'name_am' => '<p>Գիտահետազոտական և</p><p>ծրագրամեթոդական աշխատանքների</p><p>կազմակերպման բաժին&nbsp;</p>',
                'name_ru' => '<p>Oтдел по организации</p><p>научно-исследовательских и</p><p>программно-методических работ</p>',
                'link' => 'about/academy-structure/programmatic-methodological-activities',
            ],
            [
                'name_en' => '<p>Library</p>',
                'name_am' => '<p>Գրադարան</p>',
                'name_ru' => '<p>Библиотека</p>',
                'link' => 'library',
            ],
            [
                'name_en' => '<p>Unit of Organization of</p><p>Training for Trainees</p><p>of Judiciary</p>',
                'name_am' => '<p>Դատական համակարգի</p><p>ունկնդիրների ուսուցման</p><p>կազմակերպման բաժին</p>',
                'name_ru' => '<p>Отдел по организации</p><p>обучения слушателей</p><p>судебной системы</p>',
                'link' => 'about/academy-structure/training-for-trainees',
            ],
            [
                'name_en' => '<p>Publishing house</p>',
                'name_am' => '<p>Հրատարակչություն</p>',
                'name_ru' => '<p>Издательство</p>',
                'link' => null,
            ],
            [
                'name_en' => '<p>Unit of Organization of Training</p><p>for Trainees of Prosecutorial</p><p>and Investigative systems</p>',
                'name_am' => '<p>Դատախազության և քննչական համակարգի ունկնդիրների</p><p>ուսուցման կազմակերպման բաժին</p>',
                'name_ru' => '<p>Отдел по организации обучения</p><p>слушателей прокуратуры и</p><p>следственной системы</p>',
                'link' => 'about/academy-structure/training-organization',
            ],
            [
                'name_en' => '<p>Unit of Finance</p>',
                'name_am' => '<p>Ֆինանսական բաժին</p>',
                'name_ru' => '<p>Финансовый отдел</p>',
                'link' => 'about/academy-structure/unit-of-finance',
            ],
            [
                'name_en' => '<p>Unit of Cooperation and</p><p>Public Relations</p>',
                'name_am' => '<p>Համագործակցության և հանրային</p><p>կապերի բաժին</p>',
                'name_ru' => '<p>Отдел сотрудничества и</p><p>общественных связей</p>',
                'link' => 'about/academy-structure/cooperation-and-public-relation',
            ],
            [
                'name_en' => '<p>Unit of Staff and</p><p>Document management</p>',
                'name_am' => '<p>Անձնակազմի և փաստաթղթա-</p><p>շրջանառության բաժին</p>',
                'name_ru' => '<p>Отдел по работе с персоналом</p><p>и документооборота</p>',
                'link' => 'about/academy-structure/staff-and-document-management',
            ],
            [
                'name_en' => '<p>Unit of Tehchnical</p><p>and Economic activities</p>',
                'name_am' => '<p>Տեխնիկատնտեսական բաժին</p>',
                'name_ru' => '<p>Хозяйственно-технический отдел</p>',
                'link' => 'about/academy-structure/tehchnical-and-economic-activities',
            ],
            [
                'name_en' => '<p>Hotel</p>',
                'name_am' => '<p>Հյուրանոց</p>',
                'name_ru' => '<p>Гостиница</p>',
                'link' => 'about/academy-structure/hotel',
            ],
        ]);
    }
}
