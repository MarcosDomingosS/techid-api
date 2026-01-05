<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";
    public $timestamps = false;
    protected $fillable = [
        'name',
        'order',
        'sed_id'
    ];
    
    public function permissionRoles()
    {
        return $this->hasMany(PermissionRole::class, 'permission_roles', 'role_id', 'id');
    }

    public function users(){
        return $this->hasMany(User::class, 'role_id','id');
    }

    public function sed(){
        return $this->belongsTo(Sed::class, 'sed_id', 'id');
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class,'permission_roles', 'role_id', 'permission_id');
    }
}
