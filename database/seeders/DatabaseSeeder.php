<?php

namespace Database\Seeders;

use App\Models\Batch;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create batches
        $batch2024 = Batch::create([
            'name' => 'Batch 2024',
            'year' => 2024,
            'semester' => '1st',
        ]);

        $batch2023 = Batch::create([
            'name' => 'Batch 2023',
            'year' => 2023,
            'semester' => '3rd',
        ]);

        // Create courses
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

        // Create users
        $users = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'registration_number' => 'REG001', 'batch' => 'Batch 2024'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'registration_number' => 'REG002', 'batch' => 'Batch 2024'],
            ['name' => 'Mike Johnson', 'email' => 'mike@example.com', 'registration_number' => 'REG003', 'batch' => 'Batch 2023'],
            ['name' => 'Sarah Williams', 'email' => 'sarah@example.com', 'registration_number' => 'REG004', 'batch' => 'Batch 2023'],
            ['name' => 'Alex Brown', 'email' => 'alex@example.com', 'registration_number' => 'REG005', 'batch' => 'Batch 2024'],
        ];

        foreach ($users as $userData) {
            $user = User::create($userData);
            $user->courses()->attach([1, 2, 3], ['status' => 'enrolled']);
        }
    }
}
