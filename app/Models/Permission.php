<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function module(){
        return $this->belongsTo(Module::class, 'module_id');
    }
    
    public function subModule(){
        return $this->belongsTo(SubModule::class, 'sub_module_id');
    }
    
}
