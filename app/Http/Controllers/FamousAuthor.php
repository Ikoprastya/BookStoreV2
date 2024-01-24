<?php

namespace App\Http\Controllers;

use App\Models\ListBook;
use Illuminate\Http\Request;

class FamousAuthor extends Controller
{
    public function __invoke()
    {
        $list = ListBook::where("voter", ">=", 5)->orderBy("voter","desc")->paginate(10);

        return view("pages.famous-author", compact("list"));
    }
}
