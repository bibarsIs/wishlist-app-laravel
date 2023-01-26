<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WishlistItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WishlistItem>
 */
class WishlistItemFactory extends Factory
{
    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure(): static
    {
        return $this->afterCreating(function (WishlistItem $wishlistItem) {
            $creator = $wishlistItem->creator;
            $wishlistItem->wishlisters()->attach($creator);
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->sentence(3, true),
            'description' => fake()->unique()->paragraph(2, true),
        ];
    }
}
