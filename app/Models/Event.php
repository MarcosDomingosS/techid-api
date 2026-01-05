<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'name',
        'init_date',
        'end_date',
        'sed_id'
    ];

    protected $casts = [
        'init_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function sed(){
        return $this->belongsTo(Sed::class, 'sed_id', 'id');
    }

    public function studentClasses(){
        return $this->belongsToMany(StudentClass::class, 'report_events', 'event_id', 'student_class_id');
    }
}
