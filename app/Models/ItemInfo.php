<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemInfo extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); 
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id'); 
    }

    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id'); 
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id'); 
    }
}
