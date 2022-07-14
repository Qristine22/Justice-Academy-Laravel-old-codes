<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoverningBoardPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('governing_board_pages')->insert([
            [
                'text_en' => '<p>The Academy is supervised by the Governing Board of the Academy prescribed by the RA Law on "Academy of justice".</p>
                <p>&nbsp;</p>
                <p>The Board is composed of seven members, consisting of:</p>
                <p>&nbsp;</p>
                <ol style="list-style-type: none;">
                <li>
                <p>the Minister of Justice or by his/her appointment the Deputy,</p>
                </li>
                <li>
                <p>three prosecutors appointed by Prosecutor General of the RA,</p>
                </li>
                <li>
                <p>three judges appointed by the General Assembly of Judges of the RA, representing the judges of civil, criminal and administrative specializations.</p>
                </li>
                </ol>
                <p>&nbsp;</p>
                <p>The members of the Board, except the Minister of Justice or by his/her appointment the Deputy, are appointed for a term of four years. In case of early termination of the powers of a judge or a prosecutor member of the Board, the new member is appointed for the remainder of the term of the former member\'s term of office.</p>
                <p>&nbsp;</p>
                <p>The judge or the prosecutor members of the Board may not be appointed in the position of the member of the Board more than two consecutive terms.</p>
                <p>&nbsp;</p>
                <p>The Chairman of the Board is elected among the members of the Board by a majority vote of its members, by secret ballot, by a rotating order between the prosecutor and the judge members. The Minister of Justice (by his/her appointment the Deputy) may not be elected as the Chairman of the Board.</p>
                <p>&nbsp;</p>
                <p>The Chairman of the Board is elected for one-year term and if there is less than one year left at the end of his/her term of office as the member of the Board, then for that period.</p>
                <p>&nbsp;</p>
                <p>The members of the Board fulfill their responsibilities on a voluntary basis.</p>',
                'text_am' => '<p>Ակադեմիայի կառավարումն իրականացնում է Ակադեմիայի կառավարման խորհուրդը՝ &laquo;Արդարադատության ակադեմիայի մասին ՀՀ օրենքով նախատեսված կարգով։</p>
                <p>&nbsp;</p>
                <p>Խորհուրդը բաղկացած է յոթ անդամից, որի կազմում են`</p>
                <p>&nbsp;</p>
                <ol style="list-style-type: none;">
                <li>
                <p>արդարադատության նախարարը կամ նրա նշանակմամբ՝ իր տեղակալը,</p>
                </li>
                <li>
                <p>երեք դատախազ, որոնց նշանակում է ՀՀ գլխավոր դատախազը,</p>
                </li>
                <li>
                <p>երեք դատավոր, որոնց նշանակում է ՀՀ դատավորների ընդհանուր ժողովը՝ քաղաքացիական, քրեական և վարչական մասնագիտացմամբ դատավորների ներկայացվածությամբ:</p>
                </li>
                </ol>
                <p>&nbsp;</p>
                <p>Խորհրդի անդամները, բացառությամբ արդարադատության նախարարի կամ նրա նշանակմամբ՝ իր տեղակալի, նշանակվում են չորս տարի ժամկետով: Եթե Խորհրդի դատավոր կամ դատախազ անդամի լիազորությունները վաղաժամկետ դադարում են, ապա նոր անդամը նշանակվում է նախկին անդամի լիազորությունների ժամկետի ավարտին մնացած ժամկետով։</p>
                <p>&nbsp;</p>
                <p>Խորհրդի դատավոր կամ դատախազ անդամները չեն կարող ավելի քան երկու անգամ անընդմեջ նշանակվել Խորհրդի անդամ:</p>
                <p>&nbsp;</p>
                <p>Խորհրդի նախագահն ընտրվում է Խորհրդի կազմից` նրա անդամների ձայների մեծամասնությամբ, գաղտնի քվեարկությամբ, դատախազ և դատավոր անդամների միջև ռոտացիոն կարգով: Արդարադատության նախարարը (նրա նշանակմամբ՝ իր տեղակալը) չի կարող ընտրվել Խորհրդի նախագահ։</p>
                <p>&nbsp;</p>
                <p>Խորհրդի նախագահն ընտրվում է մեկ տարի ժամկետով, իսկ եթե նրա` որպես Խորհրդի անդամի լիազորությունների ժամկետի ավարտին մնացել է մեկ տարուց պակաս, ապա այդ ժամկետով։</p>
                <p>&nbsp;</p>
                <p>Խորհրդի անդամներն իրենց պարտականությունները կատարում են հասարակական հիմունքներով։</p>',
                'text_ru' => '<p>Управление Академией осуществляется Советом правления в соответствии с законом РА &laquo;Об Академии юстиции&raquo;.</p>
                <p>&nbsp;</p>
                <p>Совет состоит из 7 членов, в составе которого:</p>
                <p>&nbsp;</p>
                <ol style="list-style-type: none;">
                <li>
                <p>министр юстиции или один из его заместителей, назначенный министром,</p>
                </li>
                <li>
                <p>три прокурора, которых назначает Генеральный прокурор,</p>
                </li>
                <li>
                <p>трое судей, которых назначает общее собрание судей Республики Армения, при этом необходимо обеспечить представительство в составе Совета судей гражданской, уголовной, административной специализации.&nbsp;</p>
                </li>
                </ol>
                <p>&nbsp;</p>
                <p>Члены Совета, за исключением министра юстиции или назначенного им заместителя, назначаются сроком на 4 года. В случае, если полномочия члена Совета &ndash; судьи или прокурора досрочно прекращаются, то новый член Совета назначается на срок полномочий, оставшийся от срока предыдущего члена Совета.</p>
                <p>&nbsp;</p>
                <p>Члены Совета - судьи или прокуроры не могут быть назначены членами Совета более чем два раза подряд.</p>
                <p>&nbsp;</p>
                <p>Председатель Совета избирается Советом большинством голосов путем тайного голосования в порядке ротации между прокурорами и судьями. Министр юстиции (назначенный им его заместитель) не может быть избран председателем Совета.</p>
                <p>&nbsp;</p>
                <p>Председатель Совета избирается сроком на один год, при этом, в случае, если до окончания срока его полномочий в качестве члена Совета осталось менее года, то он избирается на оставшийся срок.</p>
                <p>&nbsp;</p>
                <p>Члены Совета выполняют свои обязательства на общественных началах.</p>',
            ]
        ]);
    }
}
