<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::create([
            'nama' => 'admin',
            'email' => 'administrator@gmail.com',
            'password' => bcrypt('123456'),
            'kontak' => '6282116253598',
            'foto' =>'',
        ]);
        User::create([
            'name' => 'user',
            'nisn' => '2023291105',
            'password' => bcrypt('smkypc'),
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
