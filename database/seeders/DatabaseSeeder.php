<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\WishlistItem;
use Exception;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        \App\Models\User::factory()
            ->has(WishlistItem::factory()->count(3), 'createdWishlistItems')
            ->create([
                'name' => 'Bibars',
                'email' => 'biba@biba.com',
            ]);

        \App\Models\User::factory(10)
            ->has(WishlistItem::factory()->times(2), 'createdWishlistItems')
            ->create();

    }
}
