<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    // Each detail only belong to 1 book (belongsTo)
    public function book(){
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
