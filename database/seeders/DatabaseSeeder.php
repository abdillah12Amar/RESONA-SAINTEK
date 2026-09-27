<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin RESONA',
            'email' => 'admin@resona.id',
            'password' => Hash::make('resona123'),
        ]);

        $this->call(SocialLinkSeeder::class);
    }
}
