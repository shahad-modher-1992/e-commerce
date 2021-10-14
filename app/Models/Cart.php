<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    // protected $guarded=[
    //     'id',
    //     'created_at',
    //     'updated_at'
    //    ];

    public $fillable = [
        'name',
        'tax',
        'total',
        'regular_price',
        'sale_price',
        // 'stock_state',
        'quantity',
        'image',
        'user_id',
        'product_id'
      ];

      // public function users() {
      //   return $this->belongsToMany(User::class);
      // }

      public function oreders() {
        return $this->belongsToMany(Order::class,'cart_order' ,'order_id', 'cart_id');
    }
}
