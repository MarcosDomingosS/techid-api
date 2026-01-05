<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Class_ extends Model
{
    protected $table = "classes";
    protected $fillable = [
        'name',
        'course_id'
    ];
    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function students(){
        return $this->belongsToMany(Student::class, 'student_classes', 'class_id', 'student_rm');
    }
}
