<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Eric Wishnu Saputra',
            'email' => 'eric.wishnu@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('hello123')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Arif Budiman',
            'email' => 'arif.budiman@gmail.com',
            'role' => 'peserta',
            'password' => bcrypt('hello123')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Joko',
            'email' => 'joko@gmail.com',
            'role' => 'voter',
            'password' => bcrypt('hello123')
        ]);
    }
}
