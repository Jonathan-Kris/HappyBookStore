<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    // Each book can only have 1 category (belongsTo)
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    // Each book only have 1 detail (hasOne)
    public function detail(){
        return $this->hasOne(Detail::class, 'book_id', 'id');
    }
}
