<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_pages')->insert([
            [
                'address_en' => 'Armenia, 0054, Yerevan, 9 Pirumyanner st.',
                'address_am' => 'Հ.Հ. ք. Երևան, 0054, Փիրումյանների փող. 9',
                'address_ru' => 'Армения, 0054, Ереван, ул. Пирумяннери 9',
                'mail' => 'info@justiceacademy.am',
                'phone' => '+374-60-460087',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.5215063186283!2d44.496839060420236!3d40.21970557552195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a97fe331a7b65%3A0xc221f33da2130e48!2z1LHVkNS01LHVkNSx1LTUsdWP1YjVktS51YXUsdWGINSx1L_UsdS01LXVhNS71LEgKEFjYWRlbXkgb2YgSnVzdGljZSk!5e0!3m2!1sru!2s!4v1639650221284!5m2!1sru!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            ],
        ]);
    }
}
