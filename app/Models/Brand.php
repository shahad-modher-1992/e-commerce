<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;


    public $fillable= [
      'name',
      'catigory_id',

    ];
    public function catigory() {
      return $this->belongsTo(Catigory::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
