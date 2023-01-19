<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'fullname'=>$this->faker->name($gender),
            'gender'=>$gender,
            'date_of_birth' =>$this->faker->dateTimeBetween('1900-01-01', '2005-12-31')->format('d/m/Y'),
        ];
    }
}
