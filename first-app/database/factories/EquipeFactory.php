<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipe>
 */
class EquipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $width=200;
        $height=200;
        $path=$this->faker->image('storage/images' ,$width, $height, 'person', true, true, 'person', false);
        return [
            'nom' => $this->faker->company(),
            'logo' => $path//$this->faker->imageUrl(360, 360, true),
        ];
    }
}
