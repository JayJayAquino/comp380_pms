<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ResourcesTableSeeder::class,
            IssuesSeeder::class,
            TasksSeeder::class,
            DeliverableSeeder::class,
            ActionItemsSeeder::class
        ]);
    }
}
