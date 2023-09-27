<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => function () {
            //     return \App\Models\User::factory()->create()->id;
            // },
            'title'=>$this->faker->text(),
            'body'=>$this->faker->text(),
        ];
    }
}
