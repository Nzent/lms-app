<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
