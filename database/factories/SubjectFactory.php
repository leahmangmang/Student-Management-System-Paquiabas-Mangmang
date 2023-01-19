<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $subject_name = $this->faker->randomElement(['Math', 'English','Filipino','History','Physical Education','Science']);
        return [
            'subject_name' => $subject_name,
            'schedule' => $this->faker->dateTimeThisYear,
            'teacher' => $this->faker->name,
            'student_id'=> Student::first()
        ];
    }
}
