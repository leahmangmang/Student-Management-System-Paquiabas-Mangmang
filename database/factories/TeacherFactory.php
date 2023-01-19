<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $subject_assigned = $this->faker->randomElement(['Math', 'English','Filipino','History','Physical Education','Science']);
        return [
            'teacher_name' =>$this->faker->name,
            'schedule' => $this->faker->dateTimeThisYear,
            'subject_assigned' =>  $subject_assigned ,
        ];
    }
}
