<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistanceLearningAdditionalMaterialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distance_learning_additional_material_links')->insert([
            [
                'pdf' => 'distance-learning/additional-materials/TmS3UVrUAZ6sk44uBk06vq4qRjWGrirqbWuemeWF.pdf',
                'link' => null,
                'link_name' => '1933 Refugee Convention',
                'additional_material_id' => '1',
            ],
            [
                'pdf' => 'distance-learning/additional-materials/lo5Cp2TRLKC761BzMJ5JsEvwAbNnKNiFfMEEG4Sj.pdf',
                'link' => null,
                'link_name' => 'On the history of the international protection of refugees_jaeger',
                'additional_material_id' => '1',
            ],
            [
                'pdf' => 'distance-learning/additional-materials/PGNBMfCZxRk5fh4zqPCwlMEkVoCoLb0eV8Fnow3r.pdf',
                'link' => null,
                'link_name' => 'Глава 1. ФОРМИРОВАНИЕ И РАЗВИТИЕ ИНСТИТУТА ПРАВ БЕЖЕНЦЕВ, ЕГО ИСТОЧНИКИ И ПРИНЦИПЫ',
                'additional_material_id' => '1',
            ],
            [
                'pdf' => 'distance-learning/additional-materials/KYQgOGlh2cuGgq8aWqIRrEdyMKJ4Fvh2m5Xg5B3n.pdf',
                'link' => null,
                'link_name' => 'Al-Ghorbani v Holder, 585 F3d 980',
                'additional_material_id' => '2',
            ],
            [
                'pdf' => 'distance-learning/additional-materials/uI6AeJT8v0r4A2GIK7G0xSe4GkJYDcT6xFQzpiw1.pdf',
                'link' => null,
                'link_name' => 'Court of Appeal_R. v Secretary of State for the Home Department Ex p. Ahmad',
                'additional_material_id' => '2',
            ],
            [
                'pdf' => 'distance-learning/additional-materials/UC9jH3gSYX0D9QnNWA7RxuAr04FYgyHtmkezwxwJ.pdf',
                'link' => null,
                'link_name' => 'Espectacion Bolanos Hernandez vs. Immigration and Naturalization Service_No. 83-7608',
                'additional_material_id' => '2',
            ],
            [
                'pdf' => null,
                'link' => 'http://evolutio.info/ru/content/view/1282/187',
                'link_name' => 'Л. В. Павлова, А. В. Селиванов, Международно-правовой статус беженца, Пособие для студентов вузов, Минск: Тесей, 2006, Глава 1. Формирование и развитие института прав беженцев, его источники и принципы и Глава 5. Международно-правовой механизм защиты прав беженцев',
                'additional_material_id' => '3',
            ],
        ]);
    }
}
