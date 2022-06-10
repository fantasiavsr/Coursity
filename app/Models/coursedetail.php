<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coursedetail extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo(course::class, 'course_id');
    }

    public function module(){
        return $this->belongsTo(module::class, 'module_id');
    }

    public function studentcourse(){
        return $this->belongsTo(studentcourse::class, 'studentcourse_id');
    }

    public function teacher(){
        return $this->belongsTo(teacher::class, 'teacher_id');
    }

    public function requirement(){
        return $this->belongsTo(requirement::class, 'requirement_id');
    }

    public function resource(){
        return $this->belongsTo(resource::class, 'resource_id');
    }
}
