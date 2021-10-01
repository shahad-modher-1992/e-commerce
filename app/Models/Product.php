<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $guarded=[
    //     'id',
    //     'created_at',
    //     'updated_at'
    //    ];
       

    
    public $fillable = [
        'name',
        'short_desc',
        'desc',
        'regular_price',
        'sale_price',
        'stock_state',
        'featured',
        'quantity',
        'image',
        'images',
        'catigory_id',
        'brand_id',
        'size',
        'color_id',
        'Dimensions',
        'weight'
      ];

    public function catigory(){
        return $this->belongsTo(Catigory::class);
    }
    // public function oreders() {
    //     return $this->belongsToMany(Order::class,'order_product' ,'order_id', 'product_id');
    // }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
    public function color() {
        return $this->belongsTo(Color::class);
    }
    public function taxes() {
        return $this->belongsToMany(Tax::class);
    }
}
