<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\WishlistItem;
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
         \App\Models\User::factory(10)
             ->has(WishlistItem::factory()->count(rand(0, 6)))
             ->create();

         \App\Models\User::factory()->has(WishlistItem::factory()->count(3))->create([
             'name' => 'Bibars',
             'email' => 'biba@biba.com',
         ]);
    }
}
