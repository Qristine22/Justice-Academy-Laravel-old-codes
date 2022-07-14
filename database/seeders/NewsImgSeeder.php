<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_imgs')->insert([
            [
                'img' => 'news/stcWHQX68wN9VJuiV62TkEBTPfOUlti9BJsOINxi.jpg',
                'news_id' => 1,
            ],
            [
                'img' => 'news/k9XbkIcZveoV5R5JExCGErUNxcmFfA56m5JT6OLX.jpg',
                'news_id' => 1,
            ],
            [
                'img' => 'news/EhNhDwZSLIzShrDruJtmCsudSeg2fbSc01Wjedtr.jpg',
                'news_id' => 1,
            ],
            [
                'img' => 'news/j43JMJ9k9WqTqezt2fVnM2tYgIbC5CZHHinpZ46g.jpg',
                'news_id' => 1,
            ],
            [
                'img' => 'news/HfXt8iPsvebTUQ7T3nZqYpq8srg1NRuRfBPHk8uM.jpg',
                'news_id' => 1,
            ],
            [
                'img' => 'news/2OpXXaXqKI0dikPolOquLLvEsmPcnWULVeqfivYX.jpg',
                'news_id' => 2,
            ],
            [
                'img' => 'news/N9KJnctRSlfoavypAr6bBihF0rL63NSZJ8l3zJGO.jpg',
                'news_id' => 2,
            ],
            [
                'img' => 'news/hmHbVlotwjoxK8TEyGmxrdjGMOYBZJad5hYQiuBq.jpg',
                'news_id' => 2,
            ],
            [
                'img' => 'news/WFaRCMu1potN7mKHgPUisdb6Si3Nj3dFSFKFL9eD.jpg',
                'news_id' => 2,
            ],
            [
                'img' => 'news/NJv9O1ngPUdqPbAg5QGYSBS6zL5w8i4Svf5H9Nia.jpg',
                'news_id' => 2,
            ],
            [
                'img' => 'news/KL5T8cqdEk6rE7159f5ryHjcfYHTBfuHAjwgVIoa.jpg',
                'news_id' => 2,
            ],
            [
                'img' => 'news/xsImnKq8OTg2P7ZSxv7j3pLFivlWHmcBiJoscTZh.png',
                'news_id' => 3,
            ],
        ]);
    }
}
