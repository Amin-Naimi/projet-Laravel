<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvenementSportif>
 */
class EvenementSportifFactory extends Factory
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
            'nom' => $this->faker->sentence(),
            'description' => $this->faker->words(2,true),
            'lieu'=> $this->faker->state(),
            'poster' => $path,//$this->faker->imageUrl(360, 360, true),
            'dateDebut' => $this->faker->date(),
            'dateFin' => $this->faker->date(),
        ];
    }
}
