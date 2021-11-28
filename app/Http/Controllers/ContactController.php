<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class ContactController extends Controller
{
    public function viewContact(){
        return view("contact", [
            'categories' => Category::all()
        ]);
    }
}
