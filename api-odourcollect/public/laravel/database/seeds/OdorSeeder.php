<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OdorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Location::class, 60)->create();
    }
}
