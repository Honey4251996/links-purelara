<?php

use Illuminate\Database\Seeder;

class LinkstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Link::class, 5)->create();
    }
}
