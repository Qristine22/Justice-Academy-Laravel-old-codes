<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery_imgs')->insert([
            [
                'img' => 'about/gallery/2014/6PSkqZeqORNu57s9zZSZcOqMRn3mCalJ4KZ5mBVU.jpg',
                'gallery_id' => 1,
            ],
            [
                'img' => 'about/gallery/2014/flIY1JoQfTVE7l00zr8sRWbVC7Cr6C63B0r6KAc7.png',
                'gallery_id' => 1,
            ],
            [
                'img' => 'about/gallery/2014/wN2Oo9p7CICKrSbfItHofP1ywJ9lTwksKt3a7uE8.png',
                'gallery_id' => 1,
            ],
            [
                'img' => 'about/gallery/2014/V5khp3sZfLr0C6ud01sn6vcDif7ZNTYKuqwFW3IE.png',
                'gallery_id' => 1,
            ],
            [
                'img' => 'about/gallery/2014/VCK9vxOSM49ukBI1Fx7KmBKtOuxus24e6hoYOTGm.jpg',
                'gallery_id' => 1,
            ],
            [
                'img' => 'about/gallery/2015/pe0MucUwE9FjdVi53Ns9asBnZpr3A575fl8M4KPe.png',
                'gallery_id' => 2,
            ],
            [
                'img' => 'about/gallery/2015/XhCv6vsia4P8wiNhvW63jGAcOOERWjioPz9yl4uc.png',
                'gallery_id' => 2,
            ],
            [
                'img' => 'about/gallery/2015/B9qTxaargWQYusDrQ9BPBguJdhdZTYEvraz36ySi.png',
                'gallery_id' => 2,
            ],
            [
                'img' => 'about/gallery/2015/gNE7KrQmWFyQ2Ek0XQ5o6Nd953lfTY5NiSEK9s0I.png',
                'gallery_id' => 2,
            ],
            [
                'img' => 'about/gallery/2015/iIIsuZKoRpvZXNxdEVKh7TZLZqIdcYB5grL8Bzto.png',
                'gallery_id' => 2,
            ],
            [
                'img' => 'about/gallery/2016/zZsRN9VYOSohdPxGDUjrEz0HpeKCAvzGf58NgjlH.png',
                'gallery_id' => 3,
            ],
            [
                'img' => 'about/gallery/2016/OPtNlnSYvxWwTawhTcLGjJbPdQJLGxG7rUKBhf5t.png',
                'gallery_id' => 3,
            ],
            [
                'img' => 'about/gallery/2016/J2Ug6VmmcYo90hemxa4U9wkDezBOHuM4ReviRcww.png',
                'gallery_id' => 3,
            ],
            [
                'img' => 'about/gallery/2016/fOgEff9LhG3ReEWUDVn2EoCSvkdhmXZnJIU0kqLl.png',
                'gallery_id' => 3,
            ],
        ]);
    }
}
