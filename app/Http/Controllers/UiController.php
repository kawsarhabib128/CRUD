<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function general()
    {
        return view('admin.pages.ui.general');
    } 
    public function icons()
    {
        return view('admin.pages.ui.icons');
    } 
    public function buttons()
    {
        return view('admin.pages.ui.buttons');
    } 
    public function sliders()
    {
        return view('admin.pages.ui.sliders');
    } 
    public function modals()
    {
        return view('admin.pages.ui.modals');
    } 
    public function navbar()
    {
        return view('admin.pages.ui.navbar');
    } 
    public function timeline()
    {
        return view('admin.pages.ui.timeline');
    } 
    public function ribbons()
    {
        return view('admin.pages.ui.ribbons');
    }
}
