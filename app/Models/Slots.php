<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slots extends Model
{
    public $table="courses_slot";
    use HasFactory;
    public function course(){
        return $this->belongsTo(Course::class,'course_id');

    }
    public function staff(){
        return $this->belongsTo(StaffMember::class,'staff_id');

    }
}
