<?php

namespace Database\Factories;

use App\Models\Proyects;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProyectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proyects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'         => rand(1, 4),
            'area'            => $this->faker->word,
            'titulo'          => $this->faker->name,
            'quehizo'         => $this->faker->name,
            'descripcion'     => $this->faker->text,
            'comentario'      => $this->faker->text,
            'name_comentario' => $this->faker->name
        ];
    }
}
