<?php

namespace Database\Factories;

use App\Models\Features;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeaturesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Features::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'           => rand(1, 4),
            'titulo'            => $this->faker->name,
            'post_date'         => $this->faker->date,
            'name_post'         => $this->faker->name,
            'description'       => $this->faker->text
        ];
    }
}
