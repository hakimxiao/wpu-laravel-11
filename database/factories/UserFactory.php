<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),

            /**
             * $a = $a ? $a : $b;   : Ternanry Operator
             * $a = $a ?: $b;       : Elvis Operator
             * $a ??= $b;           : Null Coalescing Operator
              */
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     * Contoh Customisasi field dari factory :
     *      Jadi kita bisa melakukkan kustomisasi terhadap field maupun merubah nilai default model
     *      denbgan cara begini.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
