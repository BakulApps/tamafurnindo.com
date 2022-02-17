<?php

namespace Database\Seeders;

use App\Models\Product\Category;
use App\Models\Product\Item;
use App\Models\Product\Tag;
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
        // \App\Models\User::factory(10)->create();
        $this->call(TableCompanySeeder::class);
        $this->call(TableSettingSeeder::class);

        Category::factory(10)->create();
        Tag::factory(10)->create();
        Item::factory(12)->create();
    }
}
