<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Section;
use App\Models\Player;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    protected $model = Player::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' =>$this->faker->unique()->userName,
            'email' =>$this->faker->unique()->safeEmail,
            'password' =>bcrypt('password'),
            'year_level'=>$this->faker->numberBetween(1, 4),
            'student_id_number'=>$this->faker->unique()->numberBetween(100000, 999999),
            'section_id' => Section::factory(),
        ];
    }
}
