<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'Pre-Beginner',
                'code' => '1',
            ],
            [
                'name' => 'Beginner',
                'code' => '2',
            ],
            [
                'name' => 'Primary',
                'code' => '3',
            ],
            [
                'name' => 'Junior',
                'code' => '4',
            ],
            [
                'name' => 'Intermediate',
                'code' => '5',
            ],
            [
                'name' => 'Sacrament',
                'code' => '6',
            ],
            [
                'name' => 'Senior',
                'code' => '7',
            ],
        ];

        foreach ($departments as $department){
            Department::create($department);
        }
    }
}
