<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('distance_learning_video_materials')->insert([
            [
                'name_en' => 'Հետադարձ Կապ',
                'name_am' => 'Հետադարձ Կապ',
                'name_ru' => 'Հետադարձ Կապ',
                'video' => 'distance-learning/video-materials/qBji0Go4xnv9YisPBh8t5beY9akEwLVyaMhbwnuz.mp4',
            ],
            [
                'name_en' => 'Ծրագիր',
                'name_am' => 'Ծրագիր',
                'name_ru' => 'Ծրագիր',
                'video' => 'distance-learning/video-materials/jGTi5n8iKHDhyNw8DspUAyzSTvMkU8qW6u105ayT.mp4',
            ],
            [
                'name_en' => 'Ուսումնական նյութեր',
                'name_am' => 'Ուսումնական նյութեր',
                'name_ru' => 'Ուսումնական նյութեր',
                'video' => 'distance-learning/video-materials/BajKhQkHg1fcbXeAF0YuSPxpUZ6QQQJJU4nOYPic.mp4',
            ],
            [
                'name_en' => 'Ներածություն',
                'name_am' => 'Ներածություն',
                'name_ru' => 'Ներածություն',
                'video' => 'distance-learning/video-materials/pcAag7Vqm9Ums7EXZ1GSN5KlG78ajh6Ady847Ado.mp4',
            ],
            [
                'name_en' => 'Հաճախակի տրվող հարցեր',
                'name_am' => 'Հաճախակի տրվող հարցեր',
                'name_ru' => 'Հաճախակի տրվող հարցեր',
                'video' => 'distance-learning/video-materials/gWqoWC3YIsQJ60umCNPeB0QdjP3VBS1acGzd0zVD.mp4',
            ],
            [
                'name_en' => 'Ինքնաստուգիչ հարցեր',
                'name_am' => 'Ինքնաստուգիչ հարցեր',
                'name_ru' => 'Ինքնաստուգիչ հարցեր',
                'video' => 'distance-learning/video-materials/Esw7mz5cGcBdVMQTNkp6xAzwsQTED1d8hwIBkIJG.mp4',
            ],
            [
                'name_en' => 'Տեխնիկական պահանջներ',
                'name_am' => 'Տեխնիկական պահանջներ',
                'name_ru' => 'Տեխնիկական պահանջներ',
                'video' => 'distance-learning/video-materials/wGVgvIJh37131Dn6r47BJsOcsFkJTmEGq3zNuohY.mp4',
            ],
            [
                'name_en' => 'Դասավանդման պլան',
                'name_am' => 'Դասավանդման պլան',
                'name_ru' => 'Դասավանդման պլան',
                'video' => 'distance-learning/video-materials/M9vS8vY4rdeRn5JTluWUX20UwwHV3SKSjo0dnOXa.mp4',
            ],
            [
                'name_en' => 'Ինքնաստուգիչ հարցերի պատասխաններ',
                'name_am' => 'Ինքնաստուգիչ հարցերի պատասխաններ',
                'name_ru' => 'Ինքնաստուգիչ հարցերի պատասխաններ',
                'video' => 'distance-learning/video-materials/nsTTji1tKD4FD4Q1jX1e5qglB3E9j24aWNn061dN.mp4',
            ],
        ]);
    }
}
