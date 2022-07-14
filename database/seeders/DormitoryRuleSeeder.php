<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DormitoryRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dormitory_rules')->insert([
            [
                'name_en' => 'Order',
                'name_am' => 'Կարգ',
                'name_ru' => 'Порядок',
                'pdf' => 'full-time-education/dormitory-rules/2w6FOmKmeXJ4jChO1FBFpwJTWiCNiTsmQeENvIib.pdf',
            ],
        ]);
    }
}
