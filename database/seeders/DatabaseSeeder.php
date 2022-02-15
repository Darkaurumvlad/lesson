<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Culture;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=10; $i++)
        DB::table('cultures')->insert([
            'name' => 'cult- '.$i,
        ]);
        Product::factory(50)->create();
        Client::factory(200)->create();
        // \App\Models\User::factory(10)->create();
    }
}
