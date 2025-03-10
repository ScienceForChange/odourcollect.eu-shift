<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PointOfInterest::class, 15)->create();
    }
}
