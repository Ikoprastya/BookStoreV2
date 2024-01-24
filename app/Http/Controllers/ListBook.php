<?php

namespace App\Http\Controllers;

use App\Models\ListBook as ModelsListBook;
use Illuminate\Http\Request;

class ListBook extends Controller
{

    public function search(Request $request)
    {
        $searchValue = $request->input('search');
        $selectedValue = 10;

        
        $list = ModelsListBook::where('bookName', $searchValue)->orWhere('authorName', $searchValue)->orderBy("averageRating","desc")->get();

    
        // dd($list);

        return view("pages.list-books", compact(["list", "selectedValue"]));
    }

    public function filter(Request $request)
    {
        $selectedValue = $request->input('list_shown');

        if ($selectedValue == null || $selectedValue == 10) {   
            $list = ModelsListBook::orderBy("averageRating","desc")->paginate(10);
        } else { 
            $list = ModelsListBook::orderBy("averageRating","desc")->paginate($selectedValue);

        }

        return view("pages.list-books", compact(["list","selectedValue"]));
    }

    public function __invoke()
    {
        $selectedValue = 10;
        $list = ModelsListBook::orderBy("averageRating","desc")->paginate(10);

        return view("pages.list-books", compact(["list","selectedValue"]));
    }
}
