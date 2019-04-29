<?php

use Illuminate\Database\Seeder;

class ActionItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ActionItem::class, 5)->create();
    }
}
