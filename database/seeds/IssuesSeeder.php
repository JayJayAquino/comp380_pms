<?php

use Illuminate\Database\Seeder;

class IssuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Issue::class, 5)->create();
    }
}
