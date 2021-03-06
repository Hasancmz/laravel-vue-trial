<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Card::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$category = ['kazak', 'polar', 'esofman', 'ayakkabi', 'mont'];
        return [
            'category_id' => rand(1, 5),
            'image' => $this->faker->imageUrl(640, 480),
            'title' => $this->faker->sentence(rand(1, 2)),
            'description' => $this->faker->sentence(rand(3, 5)),
            'price' => $this->faker->numberBetween(50, 100),
        ];
    }
}
