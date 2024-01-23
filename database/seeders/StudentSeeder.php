<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students=[
            [
                "name"=>"Tea",
                "fathers_name"=>"Ruata",
                "mothers_name"=>"Ruati",
                "guardian"=>"Babu",
                "dob"=>"22.11.11",
                "phone1"=>"123412341234",
                "phone2"=>"213423432",
                "bial"=>"2",
                "section"=>"2",
                "location"=>"TKV",
                "teacher_id" =>1,
                "department_id" =>1
            ],
            [
                "name"=>"Dea",
                "fathers_name"=>"Duata",
                "mothers_name"=>"Duati",
                "guardian"=>"Dabu",
                "dob"=>"22.11.11",
                "phone1"=>"123412341234",
                "phone2"=>"213423432",
                "bial"=>"2",
                "section"=>"2",
                "location"=>"TKV",
                "teacher_id" =>1,
                "department_id" =>1
            ],
            [
                "name"=>"Aea",
                "fathers_name"=>"Auata",
                "mothers_name"=>"Auati",
                "guardian"=>"Aabu",
                "dob"=>"22.11.11",
                "phone1"=>"123412341234",
                "phone2"=>"213423432",
                "bial"=>"2",
                "section"=>"2",
                "location"=>"TKV",
                "teacher_id" =>1,
                "department_id" =>1
            ],
            [
                "name"=>"Fea",
                "fathers_name"=>"Fuata",
                "mothers_name"=>"Fuati",
                "guardian"=>"Babu",
                "dob"=>"22.11.11",
                "phone1"=>"123412341234",
                "phone2"=>"213423432",
                "bial"=>"2",
                "section"=>"2",
                "location"=>"TKV",
                "teacher_id" =>2,
                "department_id" =>1
            ],
            [
                "name"=>"Gea",
                "fathers_name"=>"Guata",
                "mothers_name"=>"Guati",
                "guardian"=>"Babu",
                "dob"=>"22.11.11",
                "phone1"=>"123412341234",
                "phone2"=>"213423432",
                "bial"=>"2",
                "section"=>"2",
                "location"=>"TKV",
                "teacher_id" =>2,
                "department_id" =>1
            ],
            [
                "name"=>"Qea",
                "fathers_name"=>"Quata",
                "mothers_name"=>"Quati",
                "guardian"=>"Babu",
                "dob"=>"22.11.11",
                "phone1"=>"123412341234",
                "phone2"=>"213423432",
                "bial"=>"2",
                "section"=>"2",
                "location"=>"TKV",
                "teacher_id" =>2,
                "department_id" =>2
            ],
            [
                "name"=>"Lea",
                "fathers_name"=>"Luata",
                "mothers_name"=>"Luati",
                "guardian"=>"Babu",
                "dob"=>"22.11.11",
                "phone1"=>"123412341234",
                "phone2"=>"213423432",
                "bial"=>"2",
                "section"=>"2",
                "location"=>"TKV",
                "teacher_id" =>2,
                "department_id" =>2
            ],
            [
                "name"=>"Pea",
                "fathers_name"=>"Puata",
                "mothers_name"=>"Puati",
                "guardian"=>"Babu",
                "dob"=>"22.11.11",
                "phone1"=>"123412341234",
                "phone2"=>"213423432",
                "bial"=>"2",
                "section"=>"2",
                "location"=>"TKV",
                "teacher_id" =>2,
                "department_id" =>2
            ],
        ];

        foreach($students as $student){
            Student::create($student);
        }
    }
}
