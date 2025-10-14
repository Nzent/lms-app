<?php

namespace Database\Seeders;

use App\Models\Batch;
use Illuminate\Database\Seeder;

class BatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
