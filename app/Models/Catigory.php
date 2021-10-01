<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigory extends Model
{
    use HasFactory;

    // protected $guarded=[
    //  'id',
    //  'created_at',
    //  'updated_at'
    // ];

    public $fillable = [
      'name',
      'name'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function brands() {
      return $this->hasMany(Brand::class);
    }
}
