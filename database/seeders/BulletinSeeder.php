<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BulletinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bulletins')->insert([
            [
                'name_en' => 'BULLETIN, 2021, № 2 (6)',
                'name_am' => 'ԲԱՆԲԵՐ, 2021, № 2 (6)',
                'name_ru' => 'ВЕСТНИК, 2021, № 2 (6)',
                'pdf' => 'bulletin/bulletin/c0Fiq2R1lSHare4UdhTuJgoHAwDxVhr5xQa2Ln8K.pdf',
                'img' => 'bulletin/bulletin/PZDst0nabhrd7f17UYzEiZV38Jni2U3IU2ti9nXQ.jpg',
            ],
        ]);
    }
}
