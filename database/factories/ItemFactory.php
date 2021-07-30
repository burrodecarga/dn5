<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $icon=[
            "fas fa-arrow-alt-circle-right ml-2",
            "fas fa-archive",
            "fas fa-map-signs",
            "fas fa-file-alt",
            "fas fa-cogs fa-fw",
            "fas fa-tools",
            "far fa-object-ungroup"
        ];
        return [
            'titulo' =>$this->faker->sentence(6),
            'descripcion' =>$this->faker->text(),
            'posicion' => 0,
            'publicado' =>1,
            'autor' =>$this->faker->name(),
            'actualizado' =>$this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
            'icon'=>$this->faker->randomElement($icon),
        ];
    }
}
