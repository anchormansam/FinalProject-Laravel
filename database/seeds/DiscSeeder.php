<?php

use Illuminate\Database\Seeder;

class DiscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Disc::class, 100)->create();
    }
}
