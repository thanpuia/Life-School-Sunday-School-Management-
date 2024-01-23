<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;
    use SoftDeletes;
    
  /** GUARDED EMPTY MEANS THAT ALL ATTRIBUTES ARE MASS ASSIIGNABLE */
    protected $guarded = [];

    public function student(){
        return $this->hasMany(Student::class);
    }

    public function teacher(){
        return $this->hasMany(Teacher::class);
    }

    public function users(){ //users hi zirtirtute an ni
        return $this->hasMany(User::class);

    }
}
