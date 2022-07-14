<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admissions')->insert([
            [
                'text_en' => '<p>According to the 1st point of the 1st part of the 3rd article of the RA law on the Academy of Justice, among the series of functions implemented by the Academy, the latter organizes and conducts initial trainings of those included in the lists of candidates of applicants of judges, prosecutors and investigators in the result of the qualification testing. In order to be included in the lists of candidates of applicants of judges, prosecutors and investigators for the professional training course implemented by the Academy of Justice the corresponding procedure should be carried out.</p>',

                'text_am' => '<p>«Արդարադատության ակադեմիայի մասին» ՀՀ օրենքի 3-րդ հոդվածի 1-ին մասի 1-ին կետի համաձայն՝ Ակադեմիան ի թիվս այլ գործառույթների կազմակերպում և անցկացնում է որակավորման ստուգման արդյունքներով դատավորների թեկնածուների հավակնորդների, քննիչների և դատախազների թեկնածությունների ցուցակներում ընդգրկված անձանց մասնագիտական պատրաստումը: Ակադեմիայում մասնագիտական պատրաստում անցնելու նպատակով դատավորների թեկնածուների հավակնորդների, դատախազների և քննիչների թեկնածությունների ցուցակներում ընդգրկվելու համար սահմանված է հետևյալ կարգը.</p>',

                'text_ru' => '<p>В соответствии с п. 1 ч. 1 статьи 3 закона РА «Об академии юстиции», Академия, наряду с другими функциями, выполняет профессиональную подготовку лиц, включенных в списки претендентов в кандидаты на должности судей, следователей и прокуроров. Для прохождения профессиональной подготовки в Академии, предусмотрен следующий порядок включения лиц в списки претендентов в кандидаты на должности судей, прокуроров, следователей.</p>',
            ],
        ]);
    }
}
