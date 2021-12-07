<?php

namespace Database\Factories;

use App\Models\Trabajo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrabajoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trabajo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'           => rand(1, 6),
            'trabajo'           => $this->faker->name,
            'lugar'             => $this->faker->name,
            'start_date'        => $this->faker->date,
            'finish_date'       => $this->faker->date,
            'responsabilidades' => $this->faker->text,
        ];
    }
}
