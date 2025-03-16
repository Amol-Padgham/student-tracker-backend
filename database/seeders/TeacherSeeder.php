<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Teacher::create([
            'name' => 'John Doe',
            'email' => 'teacher@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
