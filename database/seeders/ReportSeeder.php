<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/VJYPJjnjtQreCoLiTNkGH61PABiya6Nq7iQ7eOKL.pdf',
                'year' => 2015,
            ],
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/p1jzfjTACER5fTRRP6uKc4kicaa7CS87DnkVhkt3.pdf',
                'year' => 2016,
            ],
            [
                'name_en' => 'Report',
                'name_am' => 'Հաշվետվություն',
                'name_ru' => 'Отчёт',
                'pdf' => 'about/reports/QSJYAlMNApkap7h28rMyqUUQU7PqtabIERjY9wd8.pdf',
                'year' => 2016,
            ],
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/c0m0vAQZUOPub7Ql6cnCecXdJZrI3Ag2eioCh9Ah.pdf',
                'year' => 2017,
            ],
            [
                'name_en' => 'Report',
                'name_am' => 'Հաշվետվություն',
                'name_ru' => 'Отчёт',
                'pdf' => 'about/reports/kqJ4SSqxMOOac27mCuKEwGUpla69oB2ySHMHoLfT.pdf',
                'year' => 2017,
            ],
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/Tuvo4IIhMfn9Zq42BqwwOEljTm0sLPmQOEEf1k1L.pdf',
                'year' => 2018,
            ],
            [
                'name_en' => 'Report',
                'name_am' => 'Հաշվետվություն',
                'name_ru' => 'Отчёт',
                'pdf' => 'about/reports/LorOADXJQSa9uE4SfVtxw3rFG1DVo7OOChEevKZF.pdf',
                'year' => 2018,
            ],
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/d7Ssugvo4m6CvjHtaf5JHj0roMwjJ2QzAqLkba0C.pdf',
                'year' => 2019,
            ],
            [
                'name_en' => 'Report',
                'name_am' => 'Հաշվետվություն',
                'name_ru' => 'Отчёт',
                'pdf' => 'about/reports/RXMP5ah2QdbS8wYBWUPJLlH7ih0hzeBrqdGzSw6W.pdf',
                'year' => 2019,
            ],
            [
                'name_en' => 'Independent audit conclusion',
                'name_am' => 'Անկախ աուդիտորական եզրակացություն',
                'name_ru' => 'Независимый аудиторские заключения',
                'pdf' => 'about/reports/ih6uuEkx65JorVbr2XfA2pGmnJi8lg02Ieep9BCN.pdf',
                'year' => 2020,
            ],
            [
                'name_en' => 'Report',
                'name_am' => 'Հաշվետվություն',
                'name_ru' => 'Отчёт',
                'pdf' => 'about/reports/wseGEa9B7o6eDHy9OXA2hlPcTeo72CH3xt7sEs10.pdf',
                'year' => 2020,
            ],
        ]);
    }
}
