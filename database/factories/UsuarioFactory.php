<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppModelsUsuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido_paterno' => $this->faker->lastName,
            'apellido_materno' => $this->faker->lastName,
            'correo' => $this->faker->unique()->safeEmail,
            'curp' => Str::random(18),
            'imagen' => 'https://images6.fanpop.com/image/photos/33000000/Jack-Sparrow-POTC-4-captain-jack-sparrow-33058806-960-780.jpg',
            'rfc' => Str::random(13),
            'expreriencia' => $this->faker->paragraph(),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'discapacidades' => $this->faker->paragraph(),
            'alergias' => $this->faker->paragraph(),
            'usuario' => Str::random(18),
            'contrasena' => Str::random(30),
        ];
    }
}
