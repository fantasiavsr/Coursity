<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function coursedetails(){
        return $this->hasMany(coursedetail::class);
    }

    public function course(){
        return $this->belongsTo(course::class, 'course_id');
    }

    /* public function nextstep(){
        return module::where('step', '>', $this->step)->orderBy('step', 'asc')->first();
    }

    public function previousstep(){
        return module::where('step', '<', $this->step)->orderBy('step', 'desc')->first();
    } */
}
