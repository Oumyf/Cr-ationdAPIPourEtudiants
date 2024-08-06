<?php

namespace Database\Factories;

use App\Models\UE;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UE>
 */
class UEFactory extends Factory
{
    protected $model = UE::class;

    public function definition()
    {
        return [
            'date_debut' => $this->faker->date,
            'date_fin' => $this->faker->date,
            'coef' => $this->faker->numberBetween(1, 5),
            'libelle' => $this->faker->word,
        ];
    }
}
