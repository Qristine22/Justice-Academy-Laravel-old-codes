<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            [
                'logo' => 'home/UzW6SJG42iqcrzu5tz8ucHnBl2bVbDsRbUqWpb06.png',
                'bg' => 'home/lii4W2CU9PWskVRsE1sPa8VnBqWcOt2vtZPaiRAg.png',
                'rectors_img' => 'home/7Di1zF1p5KIAKRcKVDGJh7dWrg2gGxyeXZA3PiTo.png',
                'title_en' => 'REPUBLIC OF ARMENIA ACADEMY OF JUSTICE',
                'title_am' => 'ՀԱՅԱՍՏԱՆԻ ՀԱՆՐԱՊԵՏՈՒԹՅՈՒՆ ԱՐԴԱՐԱԴԱՏՈՒԹՅԱՆ ԱԿԱԴԵՄԻԱ',
                'title_ru' => 'РЕСПУБЛИКА АРМЕНИЯ АКАДЕМИЯ ЮСТИЦИИ',
                'rectors_word_en' => '<h2><strong>Dear colleague</strong>,</h2>
                <p>&nbsp;</p>
                <p>In connection with the main activities of the Academy of Justice and for providing an open dialogue has been formed an appropriate electronic platform, where You can find the answers to all the questions You are concerned about.</p>
                <p>&nbsp;</p>
                <h3><strong>Rector</strong></h3>',
                'rectors_word_am' => '<h2>Հարգելի՛ գործընկեր,</h2>
                <p>&nbsp;</p>
                <p>Արդարադատության ակադեմիայի գործունեության հիմնական ուղղությունների կապակցությամբ բաց երկխոսություն ապահովելու նպատակով ստեղծվել է համապատասխան էլեկտրոնային հարթակ, որում Դուք կարող եք ստանալ Ձեզ հուզող բոլոր հարցերի պատասխանները:</p>
                <p>&nbsp;</p>
                <h3>Ռեկտոր</h3>',
                'rectors_word_ru' => '<h2><strong>Уважаемый коллега</strong>,</h2>
                <p>&nbsp;</p>
                <p>В связи с основными направлениями деятельности Академии юстиции создана соответствующая электронная платформа для обеспечения открытого диалога, где Вы сможете найти ответы на интересующие Вас вопросы.</p>
                <p>&nbsp;</p>
                <h3><strong>Ректор</strong></h3>',
                'rectors_signature' => 'home/zqMMTBkxQDVGH3MnkmI6J5GV0KoJUP0bzjiUDzGf.png',
            ],
        ]);
    }
}
