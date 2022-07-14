<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibraryPdfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('library_pdfs')->insert([
            [
                'name_en' => 'Booklist of Armenian literature',
                'name_am' => 'Հայալեզու գրքերի ցանկ',
                'name_ru' => 'Список литературы на армянском языке',
                'pdf' => 'library/professional-literatures/SVKbjWKWAVjVSmhBZWvjSCefJ4rhMBFbfy6dl2XH.pdf',
                'category' => 'professional-literature',
            ],
            [
                'name_en' => 'Booklist of Foreign language literature',
                'name_am' => 'Օտարալեզու գրքերի ցանկ',
                'name_ru' => 'Список литературы на иностранных языках',
                'pdf' => 'library/professional-literatures/iki3WXw1MG6VxuzxkE7tkBg0VXuCgwBWSFn8s9lD.pdf',
                'category' => 'professional-literature',
            ],



            // organizing library activities
            [
                'name_en' => 'Library',
                'name_am' => 'Գրադարան',
                'name_ru' => 'Библиотека',
                'pdf' => 'library/organizing-library-activities/zCFhjzTgSA62ATjdNneqQ4AI7RNQoqOYW36ADpxl.pdf',
                'category' => 'organizing-library-activity',
            ],
        ]);
    }
}
