<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function general() 
    {
        return view('admin.pages.forms.general');
    } 
    public function advanced() 
    {
        return view('admin.pages.forms.advanced');
    } 
    public function editors() 
    {
        return view('admin.pages.forms.editors');
    } 
    public function validation() 
    {
        return view('admin.pages.forms.validation');
    } 
}
