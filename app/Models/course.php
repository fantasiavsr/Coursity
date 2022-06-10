<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function coursedetails(){
        return $this->hasMany(coursedetail::class);
    }

    public function modules(){
        return $this->hasMany(module::class);
    }

    public function requirements(){
        return $this->hasMany(requirement::class);
    }

    public function resources(){
        return $this->hasMany(resources::class);
    }

    public function teacher(){
        return $this->hasMany(teacher::class);
    }

    public function studentcourses(){
        return $this->hasMany(studentcourse::class);
    }
}
