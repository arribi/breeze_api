<?php

namespace Database\Seeders;

use App\Models\Asociation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asociation::factory()->count(10)->create();
    }
}
