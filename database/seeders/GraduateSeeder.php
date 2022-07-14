<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraduateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('graduates')->insert([
            [
                'name' => 'Աբգարյան Լուսինե',
                'info' => 'ՀՀ վերաքննիչ քրեական դատարանի դատավոր',
                'img' => 'about/graduates/cU3nJv8CRJgubvJcac6CEfUW2k1N5FMyGMsQeEWd.jpg',
                'year' => 2014,
                'position' => 'judge',
            ],
            [
                'name' => 'Առաքելյան Գրիգոր',
                'info' => 'ՀՀ վարչական դատարանի դատավոր',
                'img' => 'about/graduates/ICN3yuLlREh2MOhbFLnjtYH8aLe7ou5CQUjfoPP3.jpg',
                'year' => 2014,
                'position' => 'judge',
            ],
            [
                'name' => 'Ասատրյան Ժաննա',
                'info' => 'Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր',
                'img' => 'about/graduates/nKlmQQd7AZBujEcFotkxsNuUJOn6QJalnSFQzl89.jpg',
                'year' => 2014,
                'position' => 'judge',
            ],
            [
                'name' => 'Ավագյան Հովհաննես',
                'info' => 'ՀՀ Կոտայքի մարզի առաջին ատյանի ընդհանուր իրավասության դատարանի նախագահ',
                'img' => 'about/graduates/lLwqryylAftlFDWwjLGpVLuzBmjKIBqXhqYEKanB.jpg',
                'year' => 2014,
                'position' => 'judge',
            ],
            [
                'name' => 'Գրիգորյան Տաթևիկ',
                'info' => 'Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր',
                'img' => 'about/graduates/ljedPo5DVwbKOaYdjkr9PiQVkF4OtBIombGuUCWQ.jpg',
                'year' => 2014,
                'position' => 'judge',
            ],
            [
                'name' => 'Գրիգորյան Վարդան',
                'info' => 'Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր',
                'img' => 'about/graduates/1iuEUTQocqaY6gCSM7ZTtYzNC7LIjNLJl7MdcMB2.jpg',
                'year' => 2014,
                'position' => 'judge',
            ],
            [
                'name' => 'Զարգարյան Հայարփի',
                'info' => 'Երևան քաղաքի առաջին ատյանի ընդհանուր իրավասության դատարանի դատավոր',
                'img' => 'about/graduates/ZPs6vdE9aR12XE6PAZfCgzpBprIsSlpMaKlMCKjm.jpg',
                'year' => 2014,
                'position' => 'judge',
            ],
            [
                'name' => 'Ամիրխանյան Ալիսա',
                'info' => null,
                'img' => 'about/graduates/qxdmvaJPQRURsKTG7r0PrcM88iO6rKOM7MUBjLZK.jpg',
                'year' => 2014,
                'position' => 'prosecutor',
            ],
            [
                'name' => 'Արզումանյան Մարտին',
                'info' => null,
                'img' => 'about/graduates/nTdPzp7EPGm62WfEsubeqZcs2B5AZeoX6M28RIN9.jpg',
                'year' => 2014,
                'position' => 'prosecutor',
            ],
            [
                'name' => 'Արսենյան Էդգար',
                'info' => null,
                'img' => 'about/graduates/j2FUr3HuUX4ZjHzr8DynIRGeV7a6gtbYpbaIAoKy.jpg',
                'year' => 2014,
                'position' => 'prosecutor',
            ],
            [
                'name' => 'Խաչատրյան Հայկ',
                'info' => null,
                'img' => 'about/graduates/xzMKJ9lRwGhg7dxXddgipihZ9ZH7eyxAdQP0BAvD.jpg',
                'year' => 2014,
                'position' => 'prosecutor',
            ],
            [
                'name' => 'Հովհաննիսյան Սևակ',
                'info' => null,
                'img' => 'about/graduates/E9EZ8vKt4KGab5vxkjtJIeSzlS1HE74IkQuQrzyy.jpg',
                'year' => 2014,
                'position' => 'prosecutor',
            ],
            [
                'name' => 'Մարտիրոսյան Հաբեթ',
                'info' => null,
                'img' => 'about/graduates/x0GpKSEjogTiiAuAzFsp2Le3XmmkeNhgsMGUIefx.jpg',
                'year' => 2014,
                'position' => 'prosecutor',
            ],
            [
                'name' => 'Մինասյան Նարեկ',
                'info' => null,
                'img' => 'about/graduates/7YD4Uio454tL21RyOYnsSObXfkOj2KuGTbRXCL0L.jpg',
                'year' => 2014,
                'position' => 'prosecutor',
            ],
            [
                'name' => 'Մուրադյան Արմեն',
                'info' => null,
                'img' => 'about/graduates/UYjfQSNENqJK1HFl8OWQUir6NUkGDBfHG7pk88lv.jpg',
                'year' => 2014,
                'position' => 'prosecutor',
            ],
            [
                'name' => 'Պողոսյան Արմեն',
                'info' => null,
                'img' => 'about/graduates/zZYbaq4SHyZwgQDy0XfvC1JYnA4pcx95IR5XSpAd.jpg',
                'year' => 2014,
                'position' => 'prosecutor',
            ],
            [
                'name' => 'Վարդանյան Հայկ',
                'info' => null,
                'img' => 'about/graduates/thktiPvE6N01DMFhyDz5sQ7f89kefXrwYXnUTyB4.jpg',
                'year' => 2014,
                'position' => 'prosecutor',
            ],
        ]);
    }
}
