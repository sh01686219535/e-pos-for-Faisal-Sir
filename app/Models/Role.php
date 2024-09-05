<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function permissions() {

        return $this->belongsToMany(Permission::class,'role_permissions');

    }
    public function permissionAssign(){
        return $this->belongsToMany(AssignPermission::class,'users_roles');
    }
}
