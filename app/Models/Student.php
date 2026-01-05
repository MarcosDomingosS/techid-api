<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    protected $primaryKey = 'rm';
    public $incrementing = false;
    protected $keytype = 'string';
    protected $fillable = [
        'rm',
        'name',
        'rfid_id',
    ];
    public $timestamps = false;

    public function classes()
    {
        return $this->belongsToMany(Class_::class, 'student_classes',  'student_rm', 'class_id');
    }
    public function rfid()
    {
        return $this->belongsTo(Rfid::class);
    }
}
