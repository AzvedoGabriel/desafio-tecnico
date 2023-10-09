<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{

    public function definition(): array
    {
        $user = User::all()->random();
        while (count($user->categories) ==0){
            $user = User::all()->random();
        }

//        if($this->count($user->categories) == 0)
//            $user = User::all()->random();
        return [
            'is_done'=> $this->faker->boolean,
            'title'=> $this->faker->text(30),
            'description'=> $this->faker->text(60),
            'due_date'=> $this->faker->dateTime(),
            'user_id'=> $user,
            'category_id'=> $user->categories->random(),
        ];
    }
}
