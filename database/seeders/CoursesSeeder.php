<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['name' => 'Web Development', 'code' => 'CS101', 'credits' => 4],
            ['name' => 'Database Design', 'code' => 'CS102', 'credits' => 3],
            ['name' => 'UI/UX Design', 'code' => 'CS103', 'credits' => 3],
            ['name' => 'Software Engineering', 'code' => 'CS104', 'credits' => 4],
            ['name' => 'Mobile Development', 'code' => 'CS105', 'credits' => 3],
        ];

        foreach ($courses as $course) {
            Course::create(array_merge($course, ['description' => 'Course on '.$course['name']]));
        }
    }
}
