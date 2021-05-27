<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    public function error404() 
    {
        return view('admin.pages.extras.error404');
    } 
    public function lockscreen() 
    {
        return view('admin.pages.extras.lockscreen');
    } 
    public function legacy_user_menu() 
    {
        return view('admin.pages.extras.legacy_user_menu');
    } 
}
