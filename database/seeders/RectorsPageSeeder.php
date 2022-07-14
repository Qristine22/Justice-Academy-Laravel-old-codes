<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RectorsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rectors_pages')->insert([
            [
                'text_en' => '<h3>The management of the Academy\'s current activities is implemented by executive body - Rector of the Academy</h3>
                <p>&nbsp;</p>
                <p>The position of the Rector may be occupied by a citizen of the RA, who knows Armenian language, has a degree in law, at least 10 years of work experience in law and at least 2 years of pedagogical activity.</p>
                <p>&nbsp;</p>
                <p>The Rector is elected by the Board through the open competition by secret ballot in accordance with the legislation of the RA and the Charter of the Academy. The decision is established by at least five votes of the Board members.</p>
                <p>&nbsp;</p>
                <p>If the Board does not elect the Rector from the submitted applications within a two-week period after the expiration of the deadline of applications for candidates for the Rector\'s position, the Rector is appointed by the Prime Minister of the RA from the number of nominated candidates. If, in that case, within a two-week period the Prime Minister does not appoint a Rector, then the Board announces a new competition.</p>
                <p>&nbsp;</p>
                <p>A term of office for the Rector is five years. The same person may not be appointed in the position of the Rector for more than two consecutive terms.</p>
                <p>&nbsp;</p>
                <p>In cases of termination, suspension of the rector\'s powers and vacant position, those powers are temporarily implemented by the person eligible to replace the Rector in accordance with the Charter.</p>
                <p>&nbsp;</p>
                <p>The Rector cannot occupy another position or have other paying job, except scientific, pedagogical and creative work.</p>',

                'text_am' => '<h3>Ակադեմիայի ընթացիկ գործունեության ղեկավարումն իրականացնում է գործադիր մարմինը` Ակադեմիայի ռեկտորը</h3>
                <p>&nbsp;</p>
                <p>Ռեկտորի պաշտոնը կարող է զբաղեցնել իրավագիտության բնագավառում գիտական աստիճան ունեցող, հայերենին տիրապետող ՀՀ քաղաքացի, որն ունի իրավունքի բնագավառում առնվազն 10 տարվա աշխատանքային և մանկավարժական գործունեության առնվազն 2 տարվա ստաժ:</p>
                <p>&nbsp;</p>
                <p>Ռեկտորն ընտրվում է Խորհրդի կողմից ՀՀ օրենսդրությամբ և Ակադեմիայի Կանոնադրությամբ սահմանված բաց մրցույթի կարգով՝ գաղտնի քվեարկությամբ, Խորհրդի անդամների առնվազն հինգ ձայնով ընդունված որոշմամբ:</p>
                <p>&nbsp;</p>
                <p>Եթե Խորհուրդը Ռեկտորի պաշտոնի համար թեկնածուների հայտերի ընդունման ժամկետի ավարտից հետո` երկշաբաթյա ժամկետում, ներկայացված հայտերի թվից չի ընտրում Ռեկտոր, ապա Ռեկտորին նշանակում է ՀՀ վարչապետը` հայտ ներկայացրած թեկնածուների թվից: Եթե տվյալ դեպքում վարչապետը երկշաբաթյա ժամկետում չի նշանակում Ռեկտոր, ապա Խորհուրդը հայտարարում է նոր մրցույթ:</p>
                <p>&nbsp;</p>
                <p>Ռեկտորի լիազորությունների ժամկետը հինգ տարի է։ Միևնույն անձը չի կարող ավելի քան երկու անգամ անընդմեջ նշանակվել Ռեկտորի պաշտոնում:</p>
                <p>&nbsp;</p>
                <p>Ռեկտորի լիազորությունների դադարեցման, կասեցման կամ պաշտոնը թափուր մնալու դեպքում այդ լիազորությունները ժամանակավորապես իրականացնում է Կանոնադրությամբ Ռեկտորին փոխարինելու իրավասություն ունեցող անձը:</p>
                <p>&nbsp;</p>
                <p>Ռեկտորը չի կարող զբաղեցնել այլ պաշտոն կամ կատարել այլ վճարովի աշխատանք, բացի գիտական, մանկավարժական և ստեղծագործական աշխատանքից:</p>',

                'text_ru' => '<h3>Руководство текущей деятельностью Академии осуществляет исполнительный орган - ректор Академии</h3>
                <p>&nbsp;</p>
                <p style="text-align: justify;">Должность ректора может занимать имеющий научную степень в сфере юриспруденции, владеющий армянским языком гражданин РА, стаж которого должен составлять не менее десяти лет в области права и не менее двух лет педагогической деятельности.</p>
                <p>&nbsp;</p>
                <p>Ректор избирается Советом правления в соответствии с законодательством РА и Уставом Академии посредством открытого конкурса путем тайного голосования решением, принятым не менее пятью голосами членов Совета.</p>
                <p>&nbsp;</p>
                <p>В случае, если Совет в двухнедельный срок после завершения срока принятия заявок от претендентов не избирает ректора, то ректора назначает премьер-министр РА из числа претендентов, подавших заявку. Если в сложившейся ситуации премьер-министр в двухнедельный срок не назначает ректора, то Совет объявляет новый конкурс.</p>
                <p>&nbsp;</p>
                <p>Срок полномочий ректора пять лет. Одно и то же лицо не может быть назначено на должность ректора более чем два раза подряд.</p>
                <p>&nbsp;</p>
                <p>В случае приостановления, отмены полномочий ректора или если должность остается вакантной, то полномочия ректора временно исполняет лицо, имеющее право заменять ректора в соответствии с Уставом.</p>
                <p>&nbsp;</p>
                <p>Ректор не может занимать другую должность или выполнять иную оплачиваемую работу, кроме научной, педагогической и творческой работы.</p>',
            ],
        ]);
    }
}
