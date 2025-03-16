<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommonAssignment;

class CommonAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CommonAssignment::create([
            'title' => 'Science Assignment',
            'description' => 'Basic Science Assignment',
            'status' => true,
        ]);

    }
}
