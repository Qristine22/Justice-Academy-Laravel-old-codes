<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvideDeferralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provide_deferrals')->insert([
            [
                'name_en' => 'Order',
                'name_am' => 'Կարգ',
                'name_ru' => 'Порядок',
                'pdf' => 'full-time-education/provide-deferral/icuwTGaPmNPna4TKA75jNpZL6dcuhsHsWS8vCQHe.pdf',
            ],
        ]);
    }
}
