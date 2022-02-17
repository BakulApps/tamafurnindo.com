<?php

namespace Database\Factories\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = [];
        for ($i=0;$i<5;$i++){
            $image[] = $this->faker->image('public/storage/images/product', 270,274, null, false);
        }
        $i = 1;
        $image = json_encode($image);
        return [
            'item_title' => $this->faker->sentence(3),
            'item_desc' => $this->faker->sentence(50),
            'item_price' => $this->faker->numberBetween(15, 50),
            'item_discount' => $this->faker->numberBetween(0, 80),
            'item_star' => $this->faker->numberBetween(1, 5),
            'item_sku' => 'CH-'. $this->faker->word,
            'item_image' => $image,
            'item_weight' => $this->faker->numberBetween(1, 50),
            'item_dimension' => '10 x 10 x 15 cm',
            'item_material' => '60% cotton, 40% polyester',
            'item_info' => 'American heirloom jean shorts pug seitan letterpress',
            'item_category' => 1,
            'item_tag' => 1,
            'item_new' => $this->faker->numberBetween(0,1),
        ];
    }
}
