<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;

use App\Interfaces\DepartmentRepositoryInterface;



class DepartmentController extends Controller
{
    private DepartmentRepositoryInterface $departmentRepository;
    public function __construct(DepartmentRepositoryInterface $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    public function index()
    {
        return response()->json([
            'data' => $this->departmentRepository->getAllModels()
        ]);
    }


    public function create()
    {

    }


    public function store(StoreDepartmentRequest $request)
    {
        return [
            'data'=> $this->departmentRepository->createModel($request->all())
        ];
    }


    public function show(Department $department)
    {
        return [
            'data'=>$this->departmentRepository->getModelById($department->id)
        ];
        
    }


    public function edit(Department $department)
    {
        //
    }


    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        return [
            'data' =>  $this->departmentRepository->updateModel($department->id, $request->all())
        ];
    }


    public function destroy(Department $department)
    {
        return $this->departmentRepository->deleteModel($department->id);
    }
}
