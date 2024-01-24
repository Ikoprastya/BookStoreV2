<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class InputRating extends Controller
{

    public function submit(Request $request){

        return redirect()->route("listBook");
    }

    public function __invoke()
    {
        $author = Author::all();
        $book = Book::all();
        return view("pages.input-rating", compact("author","book"));
    }
}
