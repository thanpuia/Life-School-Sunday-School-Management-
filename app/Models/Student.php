<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    /** GUARDED EMPTY MEANS THAT ALL ATTRIBUTES ARE MASS ASSIIGNABLE */
    protected $guarded = [];

    // public function department(){
    //     return $this->belongsTo(Department::class);
    // }

    // public function teacher(){
    //     return $this->belongsTo(Teacher::class);
    // }
    
    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'user_students');
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
