<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Str;
use App\Interfaces\StudentRepositoryInterface;
use App\Models\Department;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    private StudentRepositoryInterface $studentRepository;
    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }


    public function index()
    {
        $students = Student::all();

        return view('student/index',compact('students'));
    }

    public function create()
    {
        $prebeginner = User::where('department_id',1)->orderBy('name','asc')->get();
        $beginner = User::where('department_id',2)->orderBy('name','asc')->get();
        $primary = User::where('department_id',3)->orderBy('name','asc')->get();
        $junior = User::where('department_id',4)->orderBy('name','asc')->get();
        $intermediate = User::where('department_id',5)->orderBy('name','asc')->get();
        $sacrament = User::where('department_id',6)->orderBy('name','asc')->get();
        $senior = User::where('department_id',7)->orderBy('name','asc')->get();

        $department = [
            'prebeginner' => $prebeginner ,
            'beginner' => $beginner ,
            'primary' => $primary ,
            'junior' => $junior ,
            'intermediate' => $intermediate ,
            'sacrament' => $sacrament ,
            'senior' => $senior ,

        ];
        return view('student/create',compact('department'));
    }

 
    public function store(StoreStudentRequest $request)
    {

        $validate = $request->validate([
            'name' => 'required',
        ]);
        

        $student = new Student();
        $student->name=$request['name'];
        $student->fathers_name=$request['fathers_name'];
        $student->mothers_name=$request['mothers_name'];
        $student->guardian=$request['guardian'];
        $student->dob=$request['dob'];
        $student->phone1=$request['phone1'];
        $student->phone2=$request['phone2'];
        $student->bial=$request['bial'];
        $student->section=$request['section'];
        $student->location=$request['location'];
        $student->photo=$request['photo'];

        if(Str::contains($request['user_id'],'free*')){
            $student->user_id=$request['user_id'];

            $getDepartmentIdOfUser = User::find($request['user_id']);
            $student->department_id= $getDepartmentIdOfUser->department_id; 
    
        }else{
            $student->user_id=null;
            if($request['user_id']=='free_sale_1')
                $student->department_id= 1; 
            if($request['user_id']=='free_sale_2')
                $student->department_id= 2;
            if($request['user_id']=='free_sale_3')
                $student->department_id= 3;

        }

        
        $student->save();

        return redirect()->route('student.index');
       
    }

 
    public function show(Student $student)
    {
        $department = Department::all();
        $teacher = Teacher::all();

        return [
            'data' => $this->studentRepository->getModelById($student->id),
            'department' => $department,
            'teacher' => $teacher
        ];
    }

 
    public function edit(Student $student)
    {
        $student = Student::find($student->id);
        $beginner = User::where('department_id',1)->orderBy('name','asc')->get();
        $primary = User::where('department_id',2)->orderBy('name','asc')->get();

        return view('student.update',compact('student','beginner','primary'));
    }

    
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student = Student::find($student->id);
        $student->name=$request['name'];
        $student->fathers_name=$request['fathers_name'];
        $student->mothers_name=$request['mothers_name'];
        $student->guardian=$request['guardian'];
        $student->dob=$request['dob'];
        $student->phone1=$request['phone1'];
        $student->phone2=$request['phone2'];
        $student->bial=$request['bial'];
        $student->section=$request['section'];
        $student->location=$request['location'];
        $student->photo=$request['photo'];
      
    
        if(Str::contains($request['user_id'],'free')){
            $student->user_id=null;

            if($request['user_id']=='free_sale_1')
                $student->department_id= 1; 
            if($request['user_id']=='free_sale_2')
                $student->department_id= 2;
            // if($request['user_id']=='free_sale_3')
            //     $student->department_id= 3;
            
        }else{
            
            $student->user_id=$request['user_id'];

            $getDepartmentIdOfUser = User::find($request['user_id']);
            $student->department_id= $getDepartmentIdOfUser->department_id; 
    
    
        }

        $student->save();
        return redirect()->route('student.index');

    }

  
    public function destroy(Student $student)
    {
        return $this->studentRepository->deleteModel($student->id);
    }

    public function showStudentByTeacher ($teacherId){
        Log::error("Request zzzz ");
        return [
            'data' => $this->studentRepository->showStudentByTeacher($teacherId)
        ];
    }

    public function filter($department_id){
     
    }
}
