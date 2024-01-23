<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('department')
        ->orderBy( 'department_id')
        ->orderBy( 'name')
        ->get(); // Fetch all users
        
        return view('user.index', ['users' => $users]);
    }

     public function create()
    {
        $departments = Department::all();
        return view('user.create',compact('departments'));
    }

    public function store(Request $request)
    {
        // Validate and store user data from the form
        // Example:
        // User::create($request->all());
        $user = new User();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password= bcrypt($request['password']) ;
        $user->dob=$request['dob'];
        $user->parent=$request['parent'];
        $user->phone=$request['phone'];
        $user->bial=$request['bial'];
        $user->section=$request['section'];
        $user->location=$request['location'];
        $user->photo=$request['photo'];
        $user->department_id=$request['department_id'];

        $user->save();
        return redirect()->route('user.index');
    }

    // Display the specified user
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show', ['user' => $user]);
    }

    // Show the form for editing the specified user
    public function edit($id)
    {
        $user = User::find($id);
        $departments = Department::all();

        return view('user.update', ['user' => $user, 'departments'=>$departments]);
    }

     public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password= bcrypt($request['password']) ;
        $user->dob=$request['dob'];
        $user->parent=$request['parent'];
        $user->phone=$request['phone'];
        $user->bial=$request['bial'];
        $user->section=$request['section'];
        $user->location=$request['location'];
        $user->photo=$request['photo'];
        
        //IF THE TEACHER CHANGE DEPARTMENT, DROP ALL THE STUDENTS TO FREE SALE
        if($user->department_id!=$request['department_id']){
            
            $students = Student::where('user_id',$user->id)->get();
          
            foreach($students as $student){
                $student->user_id= null;
                $student->save();
            }
        }

        $user->department_id=$request['department_id'];
        $user->save();
        return redirect()->route('user.index');
    }

    // Remove the specified user from the database
    public function destroy($id)
    {
        // Delete the user with the given ID
        // Example:
        // User::destroy($id);

        return redirect()->route('user.index');
    }
}
