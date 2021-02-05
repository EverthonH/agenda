<?php

namespace Database\Factories;

use App\Models\Agenda;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agenda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'horario' =>$this->faker->time(),
            'data'=> $this->faker->date('Y_m_d'),
            'tipo_de_refeicao' =>$this->faker->word()
        ];
    }
}
