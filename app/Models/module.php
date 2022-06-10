<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;

    public function coursedetails(){
        return $this->hasMany(coursedetail::class);
    }

    public function course(){
        return $this->belongsTo(course::class, 'course_id');
    }
}
