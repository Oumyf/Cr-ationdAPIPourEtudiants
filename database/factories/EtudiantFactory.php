<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    protected $model = Etudiant::class;

    public function definition()
    {
        return [
            'prenom' => $this->faker->firstName,
            'nom' => $this->faker->lastName,
            'adresse' => $this->faker->address,
            'date_naissance' => $this->faker->date,
            'telephone' => $this->faker->phoneNumber,
            'matricule' => $this->faker->unique()->numerify('MAT####'),
            'email' => $this->faker->unique()->safeEmail,
            'mot_de_passe' => bcrypt('password'),
            'photo' => $this->faker->imageUrl(640, 480, 'people', true),
        ];
    }
}
