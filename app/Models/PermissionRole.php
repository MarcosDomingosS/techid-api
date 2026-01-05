<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    protected $table = "permissions";
    protected $fillable = [
        'permission_id',
        'role_id',
    ];
    public function permissions()
    {
        return $this->belongsTo(Permission::class);
    }
    public function roles(){
        return $this->belongsTo(Role::class);
    }
}
