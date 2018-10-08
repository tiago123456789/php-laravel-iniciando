<?php

use Illuminate\Database\Seeder;

class PagesTrableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement("truncate pages");
        factory(\App\Page::class, 100)->create();
    }
}
