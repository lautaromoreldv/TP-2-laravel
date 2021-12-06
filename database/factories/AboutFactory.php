<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

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
            'about'   => $this->faker->text,
            'boton'   => $this->faker->word(),
            'whatido' => $this->faker->word(),
        ];
    }
}
