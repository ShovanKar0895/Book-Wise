<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function fetch_all_books(){
        $sadsad = Book::where('status','1')->get();
        return response()->json($sadsad);
    }
}
