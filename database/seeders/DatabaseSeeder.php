<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(5)->create([
            'role' => UserRole::Viewer,
        ]);

        User::factory()->create([
            'name' => 'Agetic Admin',
            'email' => 'admin@agetic.gob.bo',
            'password' => 'Agetic@2026!',
            'role' => UserRole::SuperAdmin,
        ]);
    }
}
