<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Detail;

class DetailController extends Controller
{
    public function viewDetail($bookId){
        $d = Detail::where('book_id', $bookId)->first();
        //dd($d);

        return view("detail", [
            'detail' => Detail::where('book_id', $bookId)->first(),
            'categories' => Category::all()
        ]);
    }
}
