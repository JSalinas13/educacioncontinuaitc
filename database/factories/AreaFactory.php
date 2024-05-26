<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppModelsArea>
 */
class AreaFactory extends Factory
{
    protected $model = Area::class;

    public function definition()
    {
        return [
            'area' => $this->faker->unique()->word(),
        ];
    }
}
