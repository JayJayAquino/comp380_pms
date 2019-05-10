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
        factory(App\Models\ActionItem::class, 50)->create();
    }
}
