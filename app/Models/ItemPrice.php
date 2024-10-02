<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\ItemCostInfo;

class ItemPrice extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function itemInfo()
    {
        return $this->belongsTo(ItemInfo::class, 'item_info_id');
    }
    
    public function itemCost()
    {
        return $this->belongsTo(ItemCostInfo::class, 'item_cost_id');
    }
}
