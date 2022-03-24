<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class participantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->firstNameMale () ,
            'prenom' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'universite' => $this->faker->sentence(1),
            'institution' => $this->faker->sentence(1),
            'nationalite' => $this->faker->state(),
            'telephone' =>5,
            'paysresidence' => $this->faker->country(),
            'statut' => $this->faker->sentence(1),
            'visite' => true,
            'exemption' => true,
            'statut_particulier' => $this->faker->boolean(1),

        ];
    }
}
