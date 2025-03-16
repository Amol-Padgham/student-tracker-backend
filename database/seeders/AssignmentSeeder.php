<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assignment;
use App\Models\Student;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $students = Student::all();

        foreach ($students as $student) {
            Assignment::create([
                'title' => 'Science Project',
                'student_id' => $student->id,
                'status' => 'pending',
            ]);
        }
    }
}
