<?php

namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\Evaluation;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{protected $model = Evaluation::class;

    public function definition()
    {
        return [
            'etudiant_id' => Etudiant::factory(),
            'matiere_id' => Matiere::factory(),
            'valeur' => $this->faker->randomFloat(2, 0, 20),
            'date' => $this->faker->date,
        ];
    }
}
