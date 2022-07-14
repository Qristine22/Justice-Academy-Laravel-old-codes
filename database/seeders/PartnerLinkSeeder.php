<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners_links')->insert([
            [
                'name_en' => 'Agreement',
                'name_am' => 'Համաձայնագիր',
                'name_ru' => 'Договор',
                'link' => null,
                'file' => 'partners/links/UhJqTUmBGrqFkFxXq07Hl4O02HUfA0ESgIMhItoZ.pdf',
                'partner_id' => 1,
            ],
            [
                'name_en' => 'www.coe.int',
                'name_am' => 'www.coe.int',
                'name_ru' => 'www.coe.int',
                'link' => 'https://www.coe.int/en/web/portal/home',
                'file' => null,
                'partner_id' => 1,
            ],
            [
                'name_en' => 'Agreement',
                'name_am' => 'Համաձայնագիր',
                'name_ru' => 'Договор',
                'link' => null,
                'file' => 'partners/links/BZLC1SsDDIWvmmD5tq2WZFbJnPEQvs42GDwgm61R.pdf',
                'partner_id' => 2,
            ],
            [
                'name_en' => 'http://www.un.am/hy/agency/UNHCR',
                'name_am' => 'http://www.un.am/hy/agency/UNHCR',
                'name_ru' => 'http://www.un.am/hy/agency/UNHCR',
                'link' => 'http://www.un.am/hy/agency/UNHCR',
                'file' => null,
                'partner_id' => 2,
            ],


            // foreign
            [
                'name_en' => 'am.usembassy.gov',
                'name_am' => 'am.usembassy.gov',
                'name_ru' => 'am.usembassy.gov',
                'link' => 'https://am.usembassy.gov/hy/',
                'file' => null,
                'partner_id' => 3,
            ],
            [
                'name_en' => 'Agreement',
                'name_am' => 'Հուշագիր',
                'name_ru' => 'Договор',
                'link' => null,
                'file' => 'partners/links/Yb9a1wZBiczVXIsQ8NJmolk4s4Thj0vpDY0BFeas.pdf',
                'partner_id' => 4,
            ],
            [
                'name_en' => 'www.napu.com.ua',
                'name_am' => 'www.napu.com.ua',
                'name_ru' => 'www.napu.com.ua',
                'link' => 'http://napu.com.ua/en/home/',
                'file' => null,
                'partner_id' => 4,
            ],


            // arm&artsakh
            [
                'name_en' => 'www.court.am',
                'name_am' => 'www.court.am',
                'name_ru' => 'www.court.am',
                'link' => 'http://court.am/hy',
                'file' => null,
                'partner_id' => 5,
            ],
            [
                'name_en' => 'www.prosecutor.am',
                'name_am' => 'www.prosecutor.am',
                'name_ru' => 'www.prosecutor.am',
                'link' => 'http://www.prosecutor.am/',
                'file' => null,
                'partner_id' => 6,
            ],
        ]);
    }
}
