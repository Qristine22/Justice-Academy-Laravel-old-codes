<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RectorsDecreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rectors_decrees')->insert([
            [
                'info_en' => 'Information is available in Armenian',
                'info_am' => 'Ունկնդիրների գիշերակացի ապահովման, տրանսպորտային և սննդի հետ կապված ծախսերի փոխատուցման կարգը հաստատելու մասին',
                'info_ru' => 'Информация доступна на армянском языке',
                'pdf_name' => 'ՀՐԱՄԱՆ ԹԻՎ 047/2014-Լ.pdf',
                'pdf' => 'about/rectors-decrees/NgNUJYuQGi0jdd7iJVvyh2ehMEtRxgGHz7meDADP.pdf',
            ],
            [
                'info_en' => 'Information is available in Armenian',
                'info_am' => 'Արդարադատության ակադեմիայի ունկնդիրների կրթաթոշակ նշանակելու մասին',
                'info_ru' => 'Информация доступна на армянском языке',
                'pdf_name' => 'ՀՐԱՄԱՆ ԹԻՎ 037/2014-Լ.pdf',
                'pdf' => 'about/rectors-decrees/cGEvVnrjGsYeeyyFDf01CIM2Ytd4pmRyKmVJpHEJ.pdf',
            ],
            [
                'info_en' => 'Information is available in Armenian',
                'info_am' => 'Արդարադատության ակադեմիայի աշխատողների պաշտոնների անձնագրերը հաստատելու մասին',
                'info_ru' => 'Информация доступна на армянском языке',
                'pdf_name' => 'ՀՐԱՄԱՆ ԹԻՎ 001/2014-Լ.pdf',
                'pdf' => 'about/rectors-decrees/k2pPvZT3wutUOpF4qh7GrTCpRgR2OVl6qfWR5100.pdf',
            ],
        ]);
    }
}
