<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{

    public $fillable = [
        'name'
    ];
    use HasFactory;

    public function products() {
        return $this->hasMany(Product::class);
    }
}
