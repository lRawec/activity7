<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\RoboticsKit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'course_key' => 'Rob' . $this->faker->unique()->numberBetween(200, 900),
            'title' => $this->faker->sentence(3),
            'cover_image' => $this->faker->imageUrl(640, 480, 'robotics'),
            'content' => $this->faker->paragraphs(3, true),
            'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()->id,
        ];
    }
}