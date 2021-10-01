<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    // protected $guarded=[
    //     'id',
    //     'created_at',
    //     'updated_at'
    //    ];
       
    public $fillable = [
        'name',
        'percentage',
        'active',
        'start_date',
        'end_date'
      ];

    public function countries() {
       return $this->belongsToMany(Country::class);
    }
    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
