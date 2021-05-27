<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function top_nav()
    {
        return view('admin.pages.layout.top_nav');
    } 
    public function top_nav_sidebar() 
    {
        return view('admin.pages.layout.top_nav_sidebar');
    } 
    public function boxed() 
    {
        return view('admin.pages.layout.boxed');
    } 
    public function fixed_sidebar() 
    {
        return view('admin.pages.layout.fixed_sidebar');
    } 
    public function fixed_sidebar_custom() 
    {
        return view('admin.pages.layout.fixed_sidebar_custom');
    }
    public function fixed_topnav() 
    {
        return view('admin.pages.layout.fixed_topnav');
    } 
    public function fixed_footer() 
    {
        return view('admin.pages.layout.fixed_footer');
    } 
    public function collapsed_sidebar() 
    {
        return view('admin.pages.layout.collapsed_sidebar');
    } 
}
