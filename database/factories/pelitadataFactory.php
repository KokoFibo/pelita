<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pelitadata>
 */
class pelitadataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'mandarin' => $this->faker->name,
            'umur' => $this->faker->numberBetween(1, 99),
            'alamat' => $this->faker->address,
            'kota' => $this->faker->city,
            'telepon' => $this->faker->e164PhoneNumber,
            'hp' => $this->faker->phoneNumber,
            'daerah_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
