<?php

namespace Database\Factories;

use App\Models\TipoCurso;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_curso' => $this->faker->sentence(3),
            'objetivo' => $this->faker->paragraph(),
            'precio' => $this->faker->randomFloat(2, 10, 1000),
            'duracion' => $this->faker->time(),
            'imagen' => 'https://medialab.news/wp-content/uploads/2021/11/CursosOnlinePor.jpg',
            'dias' => $this->faker->sentence(3),
            'horario' => $this->faker->sentence(3),
            'tipo_id' => TipoCurso::all()->random()->id,
            'instructor_id' => Usuario::all()->random()->id,
        ];
    }
}
