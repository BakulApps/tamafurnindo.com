<?php

namespace Database\Factories\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment_parent' => 1,
            'comment_author' => $this->faker->name,
            'comment_email' => $this->faker->email,
            'comment_subject' => $this->faker->title,
            'comment_message' => $this->faker->sentence(30),
            'comment_image' => $this->faker->image('public/storage/images/post', 272, 272, null, false),
        ];
    }
}
