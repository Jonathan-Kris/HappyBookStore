<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    // Category can have many Books (hasMany)
    public function book(){
        return $this->hasMany(Book::class, 'category_id', 'id');
    }
}
