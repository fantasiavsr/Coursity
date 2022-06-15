<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class completedmodule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function course(){
        return $this->belongsTo(course::class, 'course_id');
    }

    public function user(){
        return $this->belongsTo(user::class, 'user_id');
    }

}
