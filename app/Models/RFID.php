<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RFID extends Model
{
    protected $table = "rfid";
    protected $fillable = [
        'code',
    ];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function sed()
    {
        return $this->belongsTo(Sed::class, 'sed_id', 'id');
    }
}
