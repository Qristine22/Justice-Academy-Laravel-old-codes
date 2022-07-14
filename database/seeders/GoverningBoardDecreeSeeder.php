<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoverningBoardDecreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('governing_board_decrees')->insert([
            [
                'info_en' => 'Decree on the approval of the training program for 2021-2022 of the initial training for persons included in the lists of candidates of prosecutors of the “Academy of Justice” state non-commercial organization',
                'info_am' => '«Արդարադատության ակադեմիա» պետական ոչ առևտրային կազմակերպության՝ դատախազների թեկնածությունների ցուցակում ընդգրկված անձանց մասնագիտական պատրաստման 2021-2022 թվականների ուսուցման ծրագիրը հաստատելու մասին որոշում',
                'info_ru' => 'Постановление «Об утверждении учебной программы профессиональной подготовки лиц, включенных в список кандидатов на должности прокуроров государственной некоммерческой организации «Академии юстиции» на 2021-2022 гг.',
                'pdf_name' => 'ՈՐՈՇՈՒՄ ԿԽ-007/21pdf',
                'pdf' => 'about/governing-board-decrees/1Std7Iu9JRbhymVojCDWh1ecW3lnVHcM52ubaDZk.pdf',
                'year' => 2021
            ],
            [
                'info_en' => 'Decree on the organization of training on the development of practical skills of the persons with a degree in the criminal law from the department of criminal specialization included in the 2021 list of candidates of judges for promotion to be appointed judge in the Court of Appeal (included in the sub-section of the cases of judicial control over pre-trial criminal proceedings and the motions on carrying out operative-investigative measures)',
                'info_am' => 'Վերաքննիչ դատարանում դատավոր նշանակվելու համար առաջխաղացման ենթակա դատավորների թեկնածուների 2021 թվականի ցուցակում ընդգրկված՝ քրեական մասնագիտացման բաժնի (մինչդատական քրեական վարույթի նկատմամբ դատական վերահսկողության գործերի և օպերատիվ-հետախուզական միջոցառումներ իրականացնելու մասին միջնորդությունների ենթաբաժնում ընդգրկված) իրավագիտության բնագավառում գիտական աստիճան ունեցող անձանց գործնական հմտությունների զարգացման մասով ուսուցման կազմակերպման մասին որոշում',
                'info_ru' => 'Постановление «Об организации обучения по части развития практических навыков у лиц, имеющих ученую степень в области юриспруденции в отделе уголовной специализации (подотдел по делам судебного надзора над досудебным уголовным производством и рассмотрению ходатайств о проведении оперативно-розыскных мероприятий), включенных в список кандидатов на продвижение по службе судей на 2021 год, для назначения на должности судей Апелляционного суда»',
                'pdf_name' => 'ՈՐՈՇՈՒՄ ԿԽ-006/21pdf',
                'pdf' => 'about/governing-board-decrees/k4wKrswujDoqbO5ZRVKP4rbYnjQfUFnnhIP3qALU.pdf',
                'year' => 2021
            ],
            [
                'info_en' => 'Decree on the approval of the initial training program for 2020 of the persons included in the list of candidates for prosecutors carrying out functions aimed at confiscating illegally obtained property',
                'info_am' => 'Ապօրինի ծագում ունեցող գույքի բռնագանձմանն ուղղված գործառույթներ իրականացնող դատախազների թեկնածությունների 2020 թվականի ցուցակում ընդգրկված անձանց մասնագիտական պատրաստման ուսուցման ծրագիրը հաստատելու մասին որոշում',
                'info_ru' => 'Постановление «Об утверждении учебной программы профессиональной подготовки лиц, включенных в список кандидатов на должности прокуроров 2020 года, осуществляющих функции по взыскании имущества, имеющего незаконное происхождение»',
                'pdf_name' => 'ՈՐՈՇՈՒՄ ԿԽ-004/20pdf',
                'pdf' => 'about/governing-board-decrees/CH1VmDaEPnglDo4aBOy4t2X4HsQcApdyVZQGfRVY.pdf',
                'year' => 2020
            ],
            [
                'info_en' => 'Decree on the approval of the training program for 2020-2021 of the initial training for persons included in the lists of candidates of prosecutors of the “Academy of Justice” state non-commercial organization',
                'info_am' => '«Արդարադատության ակադեմիա» պետական ոչ առևտրային կազմակերպության` դատախազների թեկնածությունների ցուցակում ընդգրկված անձանց մասնագիտական պատրաստման 2020-2021 թթ․ ուսուցման ծրագիրը հաստատելու մասին որոշում',
                'info_ru' => 'Постановление «Об утверждении учебной программы профессиональной подготовки лиц, включенных в список кандидатов на должности прокуроров государственной некоммерческой организации «Академии юстиции» на 2020-2021 гг.',
                'pdf_name' => 'ՈՐՈՇՈՒՄ ԿԽ-006/20pdf',
                'pdf' => 'about/governing-board-decrees/zvU8pGQiZBGeJFOKOb92PmgwoGWsvEzDImusbOrj.pdf',
                'year' => 2020
            ],
            [
                'info_en' => 'Decree on the review (audit) results of 2017 and confirming unanimously the report about the activity of 2018 of the “Academy of Justice” state non-commercial organization',
                'info_am' => '«Արդարադատության ակադեմիա» պետական ոչ առևտրային կազմակերպության 2017թ. վերստուգման (աուդիտի) արդյունքները և 2018թ. գործունեության մասին հաշվետվությունն ի գիտություն ընդունելու մասին որոշում',
                'info_ru' => 'Постановление «О принятии к сведению результатов независимого аудиторского заключения за 2017 год и отчета о деятельности за 2018 год государственной некоммерческой организации «Академия юстиции»»',
                'pdf_name' => 'ՈՐՈՇՈՒՄ ԿԽ-001/19/1.pdf',
                'pdf' => 'about/governing-board-decrees/EsjJqV38swevcsvXhxlr1CqMp9DkDS7VXE4gFvXh.pdf',
                'year' => 2019
            ],
            [
                'info_en' => 'Decree on the approval of the 2018 training program of the initial training for the judges included in the list of candidates of the “Academy of Justice” state non-commercial organization',
                'info_am' => '«Արդարադատության ակադեմիա» պետական ոչ առևտրային կազմակերպության դատավորների թեկնածությունների ցուցակում ընդգրկված անձանց մասնագիտական պատրաստման 2018թ. ուսուցման ծրագիրը հաստատելու մասին որոշում',
                'info_ru' => 'Постановление «Об утверждении учебной программы профессиональной подготовки лиц, включенных в списки кандидатов на должности судей государственной некоммерческой организации «Академия юстиции» на 2018 год»',
                'pdf_name' => 'ՈՐՈՇՈՒՄ ԿԽ-001/18/3.pdf',
                'pdf' => 'about/governing-board-decrees/JqYQZqM9htbMtbYsmFEzW2UYTgC9ejQk38Tivydv.pdf',
                'year' => 2018
            ],
            [
                'info_en' => 'Decree on the election of the chairman of the Governing Board of the “Academy of Justice” state non-commercial organization',
                'info_am' => '«Արդարադատության ակադեմիա» պետական ոչ առևտրային կազմակերպության կառավարման խորհրդի նախագահի ընտրության մասին որոշում',
                'info_ru' => 'Постановление «Об избрании председателя Совета правления государственной некоммерческой организации «Академия юстиции»»',
                'pdf_name' => 'ՈՐՈՇՈՒՄ ԿԽ-001/17/1․pdf',
                'pdf' => 'about/governing-board-decrees/bm5DnJYJaT1tcxDBEoce78lSVm926S38sJxRehkB.pdf',
                'year' => 2017
            ],
            [
                'info_en' => 'A decree on the approval of 2016 training programs of judges and those who completed the training course at the Academy of Justice and included in the list of candidates of judges, Judicial servants and Judicial bailiffs as well as the special training of judges.',
                'info_am' => 'Դատավորների և Արդարադատության ակադեմիայում ուսումնառությունն ավարտած ու դատավորների թեկնածությունների ցուցակում ընդգրկված անձանց, դատական ծառայողների, դատական կարգադրիչների վերապատրաստման, ինչպես նաև դատավորների հատուկ ուսուցման 2016 թվականի ծրագրերը հաստատելու մասին որոշում',
                'info_ru' => 'Постановление «Об утверждении учебной программы профессиональной переподготовки судей, лиц, прошедших профессиональную подготовку в Академии юстиции и включенных в списки кандидатов на должность судей, судебных служащих, судебных приставов, а также программы специального обучения судей на 2016 год»',
                'pdf_name' => 'Որոշում 54-Ա.pdf',
                'pdf' => 'about/governing-board-decrees/WaZsrKq1RvyqVXmaLoCOuHLxynzcJdQ7Emy577xb.pdf',
                'year' => 2016
            ],
            [
                'info_en' => 'A decree on the approval of 2015 training programs for judges, Judicial servants and Judicial bailiffs and professional trainings for judges included in the list of candidates.',
                'info_am' => 'Դատավորների, դատական ծառայողների, դատական կարգադրիչների վերապատրաստման, դատավորների թեկնածուների ցուցակում ընդգրկված անձանց մասնագիտական պատրաստաման 2015 թվականի ուսուցման ծրագրերը հաստատելու մասին որոշում',
                'info_ru' => 'Постановление «Об утверждении учебных программ профессиональной переподготовки судей, судебных служащих, судебных приставов и профессиональной подготовке лиц, включенных в список кандидатов на должность судей»',
                'pdf_name' => 'Որոշման ամբողջական տարբերակը.pdf',
                'pdf' => 'about/governing-board-decrees/iMI76nZzKjtC6ig0UdHP489PTE4Xm8cd7NyCl76I.pdf',
                'year' => 2015
            ],
            [
                'info_en' => 'A decree on the approval of the 2014 training programs for judges, Judicial servants and Judicial bailiffs',
                'info_am' => 'Դատավորների, դատական ծառայողների և դատական կարգադրիչների 2014թ. վերապատրաստման ծրագրերը հաստատելու մասին որոշում',
                'info_ru' => 'Постановление «Об утверждении учебных программ профессиональной переподготовки судей, судебных служащих и судебных приставов на 2014 год»',
                'pdf_name' => 'Որոշման ամբողջական տարբերակը.pdf',
                'pdf' => 'about/governing-board-decrees/Fkm6hPmOklyqXIv09SYUgACSkF0HSA6kwrjIj4Gf.pdf',
                'year' => 2014
            ],
            [
                'info_en' => 'A decree on the approval of the 2014 training programs for prosecutors and state servants in the staff of the Prosicutor\'s office',
                'info_am' => 'Դատախազների և դատախազության աշխատակազմում պետական ծառայողների 2014թ. վերապատրաստման ծրագրերը հաստատելու մասին որոշում',
                'info_ru' => 'Постановление «Об утверждении учебных программ профессиональной переподготовки прокуроров, государственных служащих аппарата прокуратуры на 2014 год»',
                'pdf_name' => 'Որոշման ամբողջական տարբերակը.pdf',
                'pdf' => 'about/governing-board-decrees/htSltJXRSseuVGE16gRznPdfqDoqQtzDQ4NOzrpI.pdf',
                'year' => 2014
            ],
        ]);
    }
}
