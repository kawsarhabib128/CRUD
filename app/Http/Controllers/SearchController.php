<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function simple() 
    {
        return view('admin.pages.search.simple');
    } 
    public function enhanced() 
    {
        return view('admin.pages.search.enhanced');
    } 
}
