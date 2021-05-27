<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function data()
    {
        return view('admin.pages.tables.data');
    } 
    public function simple()
    {
        return view('admin.pages.tables.simple');
    } 
    public function jsgrid()
    {
        return view('admin.pages.tables.jsgrid');
    } 
}
