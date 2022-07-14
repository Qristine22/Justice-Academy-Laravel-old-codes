<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitesLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites_links')->insert([
            [
                'link' => '#',
                'icon' => 'contact/site-icons/KSOvTZGWB0BmR8exUhR9BsI0edJVJzH5vNWMRRb2.png',
            ],
            [
                'link' => '#',
                'icon' => 'contact/site-icons/ZGduMMvIJBJrB9MNlz0NOGwfWznr7fENpbZX2zeV.png',
            ],
            [
                'link' => '#',
                'icon' => 'contact/site-icons/deSz0R6XsxW7G1yJTIZFKeyYbytkycRK5m1cyMOF.png',
            ],
            [
                'link' => '#',
                'icon' => 'contact/site-icons/ctmJfEw739U3yGiz0hoVtRHfXxoK7zbFwA0tgYVN.png',
            ],
        ]);
    }
}
