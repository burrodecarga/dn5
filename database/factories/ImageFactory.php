<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $i = ['public/pic2.jpg','public/pic1.jpg'];
        return [
            'url'=>$this->faker->randomElement($i),
            'item_id'=>$this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        ];
    }
}
