<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkersImgsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers_imgs')->insert([
            [
                'worker_id' => '1',
                'img' => 'about/workers/wBsP5ha0BfEe74QskSSGvc20pdYUf0C9j9t5wX14.jpg',
            ],
            [
                'worker_id' => '2',
                'img' => 'about/workers/9XrkvuT2uE8VSFVoPylE6wZmzFJrRlbOQACQ7PYQ.jpg',
            ],
            [
                'worker_id' => '3',
                'img' => 'about/workers/4zNUMPtHRCgcHupP5Du0kMbVXt9OqMAuHbn5ZSw9.jpg',
            ],
            [
                'worker_id' => '5',
                'img' => 'about/workers/uEM60ACq8EmGTgBUoh2H94pGD0x6qZgqr8ysDurV.jpg',
            ],
            [
                'worker_id' => '7',
                'img' => 'about/workers/V7waJaChmpULC3aqIhNExwZrDjRPh7RGMzthxPt2.jpg',
            ],
            [
                'worker_id' => '8',
                'img' => 'about/workers/7jGEaeCrMZaWqoxtYPaEamTeNwU1Gm52ga4cnmiM.jpg',
            ],
            [
                'worker_id' => '9',
                'img' => 'about/workers/KECoWuhiyYEnDUB8QkWjUi04nohFJGlRdi6NS93D.jpg',
            ],

            [
                'worker_id' => '11',
                'img' => 'about/workers/eviaIM3T9V6eaEoYZPlxqDy8BEENIgUe7v6JOBBW.jpg',
            ],
            [
                'worker_id' => '12',
                'img' => 'about/workers/Us1xZ8mz31z9u9RRM42SZbBVZMrLdX9dbHGOuS8Q.jpg',
            ],
            [
                'worker_id' => '12',
                'img' => 'about/workers/9CNBHC0QtxkJcxX6SlHvFfeneiRFN3CHvHGL8zQ0.jpg',
            ],
            [
                'worker_id' => '12',
                'img' => 'about/workers/w9v0g688IY9upj43LZRBMe4QkyFtc71l0306zCro.jpg',
            ],
            [
                'worker_id' => '12',
                'img' => 'about/workers/vNoCz1QZwgYyhoOPxUd5D1lpmSasmiayvzKboaI4.jpg',
            ],
            [
                'worker_id' => '12',
                'img' => 'about/workers/bfYTEgn99Vo7zsKZvk0HQfl1z0lh9W5g1hpNKTe2.jpg',
            ],
        ]);
    }
}
