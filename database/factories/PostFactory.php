<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->domainName(),
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, doloremque adipisci id laborum exercitationem voluptatum illum possimus, officiis quia ullam assumenda soluta repellat doloribus? Laboriosam nesciunt beatae debitis tempora asperiores.'
        ];
    }
}
