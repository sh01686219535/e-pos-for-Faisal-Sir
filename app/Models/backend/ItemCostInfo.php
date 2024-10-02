<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemInfo;

class ItemCostInfo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function itemInfo()
    {
        return $this->belongsTo(ItemInfo::class, 'item_info_id');
    }
}