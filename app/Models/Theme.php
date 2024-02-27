<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'font_en',
        'image',
        'is_free',
        'category_id',
];

public function category(){
    return $this->belongsTo(Category::class,'category_id');
   }


}
