<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasApiTokens, HasFactory;

    // protected $guarded=[
    //     'id',
    //     'created_at',
    //     'updated_at'
    //    ];
       

    protected $fillable = [
       'phone',
       'user_id',
       'address',
       'status',
       'payment_method'
    ];
    public function carts() {
        return $this->belongsToMany(Cart::class ,'cart_order', 'order_id', 'cart_id')->withPivot('qty');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
