<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaincontenarController extends Controller
{
    public function index()
    {
        return view('admin.main.maincontenar');
    }
}
