<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name','short_des','des','sku','category_id','img','subcategory_id','price','discount','view'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function subcat(){
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }
}
