<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HallOfFame extends Model
{
    public $table="hall_of_fame";
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}