<?php

namespace App\Repositories;

use App\Interfaces\StudentRepositoryInterface;
use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface 
{
    public function getAllModels() 
    {
        return Student::all();
    }

    public function getModelById($StudentId) 
    {
        return Student::findOrFail($StudentId);
    }

    public function deleteModel($StudentId) 
    {
        Student::destroy($StudentId);
    }

    public function createModel(array $StudentDetails) 
    {
        return Student::create($StudentDetails);
    }

    public function updateModel($StudentId, array $newDetails) 
    {
        return Student::whereId($StudentId)->update($newDetails);
    }

    public function showStudentByTeacher($teacherId)
    {
        return Student::where('teacher_id', $teacherId)->get();
    }

}
