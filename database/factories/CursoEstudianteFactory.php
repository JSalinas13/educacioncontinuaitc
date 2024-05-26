<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CursoEstudiante>
 */
class CursoEstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'curso_id' => Curso::all()->random()->id,
            'estudiante_id' => Usuario::all()->random()->id,
            'estatus_pago' => $this->faker->boolean,
            'calificacion' => $this->faker->randomFloat(2, 0, 10),
        ];
    }
}
