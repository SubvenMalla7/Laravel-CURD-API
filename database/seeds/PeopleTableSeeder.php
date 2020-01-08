<?php

use Illuminate\Database\Seeder;
use App\People;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(People::class,50)->create();
    }
}
