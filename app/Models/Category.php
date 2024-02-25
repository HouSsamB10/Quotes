<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'logo',
        'is_free',
        'type',
        'created_by',

        'categorible_id',
        'categorible_type',
     ];


     public function categorible()
     {
         return $this->morphTo();
     }


}
