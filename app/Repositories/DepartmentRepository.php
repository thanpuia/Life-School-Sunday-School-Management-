<?php

namespace App\Repositories;

use App\Interfaces\DepartmentRepositoryInterface;
use App\Models\Department;

class DepartmentRepository implements DepartmentRepositoryInterface 
{
    public function getAllModels() 
    {
        return Department::all();
    }

    public function getModelById($DepartmentId) 
    {
        return Department::findOrFail($DepartmentId);
    }

    public function deleteModel($DepartmentId) 
    {
        Department::destroy($DepartmentId);
    }

    public function createModel(array $DepartmentDetails) 
    {
        return Department::create($DepartmentDetails);
    }

    public function updateModel($DepartmentId, array $newDetails) 
    {
        return Department::whereId($DepartmentId)->update($newDetails);
    }


}
