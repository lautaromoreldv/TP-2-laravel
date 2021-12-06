<?php

namespace Database\Factories;

use App\Models\Proskill;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProskillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proskill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 6),
            'titulo'  => $this->faker->word(),
            'name'    => $this->faker->word(),
            'percent' => rand(1, 100)
        ];
    }
}
