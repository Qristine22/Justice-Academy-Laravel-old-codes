<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BehaviorRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('behavior_rules')->insert([
            [
                'name_en' => 'Excerpt',
                'name_am' => 'Քաղվածք',
                'name_ru' => 'Выдержка',
                'pdf' => 'full-time-education/behavior-rules/bTOgujv80boBZb9XuDxnqyZcXt73cZ1OBaWSNdC2.pdf',
            ],
        ]);
    }
}
