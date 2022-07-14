<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistanceLearningBookPdfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distance_learning_books_pdfs')->insert([
            [
                'name_en' => 'Ծրագիր - Փախստականների իրավունք',
                'name_am' => 'Ծրագիր - Փախստականների իրավունք',
                'name_ru' => 'Ծրագիր - Փախստականների իրավունք',
                'pdf' => 'distance-learning/books/pdfs/ctHURQK5J64RLr9NYI18e9DvrtiyzwbQ9lnAgKYE.pdf',
                'book_id' => '1',
            ],
            [
                'name_en' => 'Նախաբան',
                'name_am' => 'Նախաբան',
                'name_ru' => 'Նախաբան',
                'pdf' => 'distance-learning/books/pdfs/S1jIgiPQjnzQ8M5Oc3r9ptHxrJLvmN1vbPWhyMWT.pdf',
                'book_id' => '1',
            ],
            [
                'name_en' => 'Ներածություն',
                'name_am' => 'Ներածություն',
                'name_ru' => 'Ներածություն',
                'pdf' => 'distance-learning/books/pdfs/jYP55NiJd4fnx68v0zENgU7YeF34DeJazLQLi6ek.pdf',
                'book_id' => '1',
            ],
            [
                'name_en' => 'Տերմինների բառարան',
                'name_am' => 'Տերմինների բառարան',
                'name_ru' => 'Տերմինների բառարան',
                'pdf' => 'distance-learning/books/pdfs/JDoR03BnY1FT5geOg3fl6CUMx4ENSXSqeTaWoGxv.pdf',
                'book_id' => '2',
            ],

            [
                'name_en' => 'Ծրագիր - Փախստականների իրավունք',
                'name_am' => 'Ծրագիր - Փախստականների իրավունք',
                'name_ru' => 'Ծրագիր - Փախստականների իրավունք',
                'pdf' => 'distance-learning/books/pdfs/XyCRU49LSPFSdasMCLsdyB3xnZr9x3Z49GQYhw0Q.pdf',
                'book_id' => '3',
            ],
            [
                'name_en' => 'Նախաբան',
                'name_am' => 'Նախաբան',
                'name_ru' => 'Նախաբան',
                'pdf' => 'distance-learning/books/pdfs/Vnj5aFgwjY7wdm2zWm84oZ084fDykBJl2NsyXyQA.pdf',
                'book_id' => '3',
            ],
            [
                'name_en' => 'Ներածություն',
                'name_am' => 'Ներածություն',
                'name_ru' => 'Ներածություն',
                'pdf' => 'distance-learning/books/pdfs/NmouxVqCgN2abv8J2cQswnPvJJaTJANK7HyTeXG0.pdf',
                'book_id' => '3',
            ],
        ]);
    }
}
