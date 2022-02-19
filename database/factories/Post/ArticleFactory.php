<?php

namespace Database\Factories\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_title' => $this->faker->title,
            'article_content' => $this->faker->sentence(500),
            'article_image' => $this->faker->image('public/storage/images/post', 270, 368, null, false),
            'article_category' => $this->faker->numberBetween(1,8),
            'article_tag' => json_encode([1,2,3,4,7]),
            'article_author' => $this->faker->name,
            'article_is_commented' => $this->faker->boolean,
            'article_comment' => $this->faker->numberBetween(1,5),
        ];
    }
}
