<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Component::insert([
            ['name' => 'Problem-Solving Skills', 'max_marks' => 40],
            ['name' => 'Mathematical Accuracy', 'max_marks' => 30],
            ['name' => 'Proof and Reasoning', 'max_marks' => 20],
            ['name' => 'Presentation', 'max_marks' => 10],
        ]);
    }
}
