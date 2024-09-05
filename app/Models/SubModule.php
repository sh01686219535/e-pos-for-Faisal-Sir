<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubModule extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function module(){
        return $this->belongsTo(Module::class, 'module_id');
    }
    // Define the relationship with Permission
    public function permission()
    {
        return $this->hasMany(Permission::class, 'subModule_id');
    }
}
