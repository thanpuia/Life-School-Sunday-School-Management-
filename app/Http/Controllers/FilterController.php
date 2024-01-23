<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function department($department_id){
        $students = Student::where('department_id',$department_id)->with(['user'])->get();
        $department = Department::find($department_id);
        
        return view('filter.department',compact('students','department'));
    }

    public function home(){
        $prebeginnerZirtirtu = User::where('department_id','1')->count();
        $beginnerZirtirtu = User::where('department_id','2')->count();
        $primaryZirtirtu = User::where('department_id','3')->count();
        $juniorZirtirtu = User::where('department_id','4')->count();
        $intermediateZirtirtu = User::where('department_id','5')->count();
        $sacramentZirtirtu = User::where('department_id','6')->count();
        $seniorZirtirtu = User::where('department_id','7')->count();
        $allZirtirtu = User::where('department_id','!=',NULL)->count();

        $prebeginnerZirlai = Student::where('department_id','1')->count();
        $beginnerZirlai = Student::where('department_id','2')->count();
        $primaryZirlai = Student::where('department_id','3')->count();
        $juniorZirlai = Student::where('department_id','4')->count();
        $intermediateZirlai = Student::where('department_id','5')->count();
        $sacramentZirlai = Student::where('department_id','6')->count();
        $seniorZirlai = Student::where('department_id','7')->count();
        $allZirlai = Student::where('department_id','!=',NULL)->count();

        $zirtirtu = [
            'prebeginner' => $prebeginnerZirtirtu,
            'beginner' => $beginnerZirtirtu,
            'primary' => $primaryZirtirtu,
            'junior' => $juniorZirtirtu,
            'intermediate' => $intermediateZirtirtu,
            'sacrament' => $sacramentZirtirtu,
            'senior' => $seniorZirtirtu,
            'all' => $allZirtirtu,

        ];

        $zirlai = [
            'prebeginner' => $prebeginnerZirlai,

            'beginner' => $beginnerZirlai,
            'primary' => $primaryZirlai,
            'junior' => $juniorZirlai,
            'intermediate' => $intermediateZirlai,
            'sacrament' => $sacramentZirlai,
            'senior' => $seniorZirlai,
            'all' => $allZirlai,

        ];

        return view('welcome',compact('zirtirtu','zirlai'));
    }
}
