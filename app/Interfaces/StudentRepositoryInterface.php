<?php

namespace App\Interfaces;

interface StudentRepositoryInterface 
{
    public function getAllModels();
    public function getModelById($modelId);
    public function deleteModel($modelId);
    public function createModel(array $modelDetails);
    public function updateModel($modelId, array $newDetails);

    public function showStudentByTeacher($teacherId);

}
