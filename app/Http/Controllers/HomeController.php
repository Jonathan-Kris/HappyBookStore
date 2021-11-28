<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("index", [
            'categories' => Category::all(),
            'books' => Book::paginate(5)
        ]);
    }

    public function viewCategory($category_id){
        return view("category", [
            'categories' => Category::all(),
            'categoryTitle' => Category::where('id', $category_id)->first(),
            'books' => Book::where('category_id', $category_id)->paginate(5)
        ]);
    }
}
