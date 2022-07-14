<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery_videos')->insert([
            [
                'text_en' => 'Official opening ceremony of the Academy of Justice: “Yerkir Media” TV',
                'text_am' => 'Արդարադատության ակադեմիայի պաշտոնական բացման արարողությունը «Երկիր Մեդիա» ՀԸ անդրադարձը',
                'text_ru' => 'Официальная церемония открытия Академии юстиции: «Еркир Медиа»',
                'full_date' => '18.03.2014',
                'year' => '2014',
                'link' => '<iframe width="529" height="297" src="https://www.youtube.com/embed/5HIbwxChPIU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'text_en' => 'The first trainees of the Academy of Justice received diplomas: “Iravaban.net”',
                'text_am' => 'Արդարադատության ակադեմիայի առաջին ունկնդիրները ստացան դիպլոմներ. «Iravaban.net» կայքի անդրադարձը',
                'text_ru' => 'Первые слушатели Академии юстиции получили дипломы: «Iravaban.net»',
                'full_date' => '19.12.2014',
                'year' => '2014',
                'link' => '<iframe width="529" height="297" src="https://www.youtube.com/embed/5Y95snUoM4o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'text_en' => 'Memorandum of understanding between the Academy of Justice and School of Advocates: “Iravaban.net”',
                'text_am' => 'Փոխըմբռման հուշագիր՝ Արդարադատության ակադեմիայի և Փաստաբանական դպրոցի միջև. «Iravaban.net» կայքի անդրադարձը',
                'text_ru' => 'Меморандум о сотрудничестве между Академией юстиции и Школой адвокатов: «Iravaban.net»',
                'full_date' => '07.03.2015',
                'year' => '2015',
                'link' => '<iframe width="529" height="297" src="https://www.youtube.com/embed/cofdvrijczM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'text_en' => 'The delegation of the Academy left for Artsakh on a working visit: \'\'Artsakh TV\'\'',
                'text_am' => 'Ակադեմիայի պատվիրակության այցը Արցախ. «Արցախ ՀԸ» անդրադարձը',
                'text_ru' => 'Рабочий визит делегации Академии в Арцах: «Арцах ТВ»',
                'full_date' => '11.04.2015',
                'year' => '2015',
                'link' => '<iframe width="529" height="297" src="https://www.youtube.com/embed/rYM2rfeIqvI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'text_en' => 'Diplomas for the candidates of judges and prosecutors: “Ararat” TV',
                'text_am' => 'Դիպլոմներ դատավորների և դատախազների թեկնածուներին. «Արարատ» ՀԸ անդրադարձը',
                'text_ru' => 'Дипломы кандидатам на должности судей и прокуроров: «Арарат»',
                'full_date' => '25.12.2015',
                'year' => '2015',
                'link' => '<iframe width="529" height="297" src="https://www.youtube.com/embed/r5n-RhRfr1k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
        ]);
    }
}
