<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = "permissions";
    protected $fillable = [
        'name',
        'description',
    ];
    public function permissionRoles()
    {
        return $this->hasMany(PermissionRole::class, 'permission_roles', 'permission_id', 'id');
    }

    public function roles(){
        return $this->belongsToMany(Role::class,'permission_roles', 'permission_id', 'role_id');
    }
}
