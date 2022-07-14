<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MassMediaLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mass_media_links')->insert([
            [
                'site_name' => 'www.iravaban.net',
                'link_name' => 'https://www.youtube.com/watch?v=5Y95snUoM4o',
                'link' => 'https://www.youtube.com/watch?v=5Y95snUoM4o',
                'mass_media_id' => 1,
            ],
            [
                'site_name' => 'www.armenpress.am',
                'link_name' => 'Արդարադատության ակադեմիայի առաջին ունկնդիրների մասնագիտական պատրաստման դասընթացը եզրափակվել է',
                'link' => 'https://armenpress.am/arm/news/788568',
                'mass_media_id' => 1,
            ],
            [
                'site_name' => 'www.a1plus.am',
                'link_name' => 'Դատավորներն ու դատախազների թեկնածուները դիպլոմներ ստացան',
                'link' => 'https://www.pastinfo.am/hy/news/2014/12/19/%D4%B4%D5%AB%D5%BA%D5%AC%D5%B8%D5%B4%D5%B6%D5%A5%D6%80-%D5%BD%D5%BF%D5%A1%D6%81%D5%A1%D5%B6-%D4%B1%D6%80%D5%A4%D5%A1%D6%80%D5%A1%D5%A4%D5%A1%D5%BF%D5%B8%D6%82%D5%A9%D5%B5%D5%A1%D5%B6-%D5%A1%D5%AF%D5%A1%D5%A4%D5%A5%D5%B4%D5%AB%D5%A1%D5%B5%D5%AB-%D5%A1%D5%BC%D5%A1%D5%BB%D5%AB%D5%B6-%D5%B7%D6%80%D5%BB%D5%A1%D5%B6%D5%A1%D5%BE%D5%A1%D6%80%D5%BF%D5%B6%D5%A5%D6%80%D5%A8/132305?fbclid=IwAR1s3_ZXQzD5UqFURSUoHFs8uzOS9ZLGdQyXBx6iLBVmV3Wjpr3oQrPdjkM',
                'mass_media_id' => 1,
            ],
            [
                'site_name' => 'www.pastinfo.am',
                'link_name' => 'Դիպլոմներ ստացան Արդարադատության ակադեմիայի առաջին շրջանավարտները',
                'link' => 'https://www.pastinfo.am/hy/news/2014/12/19/%D4%B4%D5%AB%D5%BA%D5%AC%D5%B8%D5%B4%D5%B6%D5%A5%D6%80-%D5%BD%D5%BF%D5%A1%D6%81%D5%A1%D5%B6-%D4%B1%D6%80%D5%A4%D5%A1%D6%80%D5%A1%D5%A4%D5%A1%D5%BF%D5%B8%D6%82%D5%A9%D5%B5%D5%A1%D5%B6-%D5%A1%D5%AF%D5%A1%D5%A4%D5%A5%D5%B4%D5%AB%D5%A1%D5%B5%D5%AB-%D5%A1%D5%BC%D5%A1%D5%BB%D5%AB%D5%B6-%D5%B7%D6%80%D5%BB%D5%A1%D5%B6%D5%A1%D5%BE%D5%A1%D6%80%D5%BF%D5%B6%D5%A5%D6%80%D5%A8/132305?fbclid=IwAR1s3_ZXQzD5UqFURSUoHFs8uzOS9ZLGdQyXBx6iLBVmV3Wjpr3oQrPdjkM',
                'mass_media_id' => 1,
            ],
            [
                'site_name' => 'www.aysor.am',
                'link_name' => 'Արդարադատության ակադեմիայում առաջին անգամ մասնագիտական պատրաստում կստանա դատախազի 5 թեկնածու ԼՂՀ-ից',
                'link' => 'https://www.aysor.am/am/news/2015/02/23/%D4%B1%D6%80%D5%A4%D5%A1%D6%80%D5%A1%D5%A4%D5%A1%D5%BF%D5%B8%D6%82%D5%A9%D5%B5%D5%A1%D5%B6-%D5%A1%D5%AF%D5%A1%D5%A4%D5%A5%D5%B4%D5%AB%D5%A1/910188?fbclid=IwAR2YoEzXNS4rmkt1mZKI7T7hgRXjw6-EsfJy2asHbpRy_0qWRXJ2B_uq_CY',
                'mass_media_id' => 2,
            ],
            [
                'site_name' => 'www.iravaban.net',
                'link_name' => 'Արդարադատության ակադեմիայի 2015 թվականի ուսումնական գործընթացը մեկնարկեց',
                'link' => 'https://iravaban.net/78561.html?fbclid=IwAR0QDsQGCgMqg6HC3CkA2quBSbUlFKGLsw7O5ksCl0W3Ym2TxBcIik5ZzQM',
                'mass_media_id' => 2,
            ],
            [
                'site_name' => 'www.tert.am',
                'link_name' => 'ԼՂՀ-ից դատախազի 5 թեկնածու առաջին անգամ կուսանի Արդարադատության ակադեմիայում',
                'link' => 'https://www.tert.am/am/news/2015/02/23/academy/1598128?hc_location=ufi&fbclid=IwAR2aUum6WYoFlGKESf5uGU2NOqeBUNw13BKQiJZ7SSnlTMLvsJYWbUQVGQw',
                'mass_media_id' => 2,
            ],
            [
                'site_name' => 'www.armenpress.am',
                'link_name' => 'Արդարադատության ակադեմիայում առաջին անգամ մասնագիտական ուսուցում կստանան դատախազի 5 թեկնածու ԼՂՀ-ից',
                'link' => 'https://armenpress.am/arm/news/795097.html?fbclid=IwAR0GZXQmpqfE6qA02CAiYmeCi5FhpsPhryC0J17iuDPzRwcp_mYsf2mBl_o',
                'mass_media_id' => 2,
            ],
        ]);
    }
}
