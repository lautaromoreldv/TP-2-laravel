<?php

namespace Database\Factories;

use App\Models\Hago;
use Illuminate\Database\Eloquent\Factories\Factory;

class HagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => rand(1, 4),
            'titulo'      => $this->faker->name,
            'descripcion' => $this->faker->text
        ];
    }
}
