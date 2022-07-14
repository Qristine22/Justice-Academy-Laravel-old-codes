<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BulletinInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bulletin_infos')->insert([
            [
                'name_en' => 'Notice to authors',
                'name_am' => 'Ի գիտություն հեղինակների',
                'name_ru' => 'К сведению авторов',
                'pdf' => 'bulletin/info/XGbOBcC0xwwONh1OBj24432JRtTnHVkptORLs3SS.pdf',
            ],
            [
                'name_en' => 'The order organizing the publishing work of scientific - practical journal',
                'name_am' => 'Գիտագործնական հանդեսի հրատարակման աշխատանքների կազմակերպման կարգը',
                'name_ru' => 'Порядок организации издательской работы научно-практического журнала',
                'pdf' => 'bulletin/info/73aT8HtWSTsaWTjdnIK2aZxrbhfPGGupka7iEAeB.pdf',
            ],
            [
                'name_en' => 'The form of the cover of scientific - practical journal',
                'name_am' => 'Գիտագործնական հանդեսի կազմի ձևը',
                'name_ru' => 'Форма обложки научно - практического журнала',
                'pdf' => 'bulletin/info/aSUnGk0IYIr4YuCDcpLA56Ix8Ra3gxXUvFOW4oEF.jpg',
            ],
            [
                'name_en' => 'The rules of ethics of scientific - practical journal',
                'name_am' => 'Գիտագործնական հանդեսի էթիկայի կանոնները',
                'name_ru' => 'Правила этики научно - практического журнала',
                'pdf' => 'bulletin/info/pTNkbYbyzHF0l51xBU8BmzPdKTWOKGKNSNVVjnpA.pdf',
            ],
            [
                'name_en' => 'The composition of editorial board of scientific- practical journal',
                'name_am' => 'Գիտագործնական հանդեսի խմբագրական խորհրդի կազմը',
                'name_ru' => 'Cостав редакционного совета научно-практического журнала',
                'pdf' => 'bulletin/info/S99YpG6tnNN0K3xLlLwLBjIjCG9BZj4QeibCFZ1n.pdf',
            ],
            [
                'name_en' => 'Review ruls of articles (materials) for publishing in the scientific-practical journal',
                'name_am' => 'Գիտագործնական հանդես ներկայացվող հոդվածների (նյութերի) գրախոսման կանոններ',
                'name_ru' => 'Правила рецензирования статей (материалов), для публикации в научно-практическом журнале',
                'pdf' => 'bulletin/info/LqclJVqqHNHwPmqCfKScPnZ2orvnHHEoxW6NlHbE.pdf',
            ],
        ]);
    }
}
