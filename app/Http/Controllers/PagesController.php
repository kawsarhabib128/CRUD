<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function invoice() 
    {
        return view('admin.pages.pages.invoice');
    } 
    public function profile() 
    {
        return view('admin.pages.pages.profile');
    } 
    public function e_commerce() 
    {
        return view('admin.pages.pages.e_commerce');
    } 
    public function projects() 
    {
        return view('admin.pages.pages.projects');
    }
    public function project_add() 
    {
        return view('admin.pages.pages.project_add');
    }
    public function project_edit() 
    {
        return view('admin.pages.pages.project_edit');
    }
    public function project_detail() 
    {
        return view('admin.pages.pages.project_detail');
    }
    public function contacts() 
    {
        return view('admin.pages.pages.contacts');
    }
    public function faq() 
    {
        return view('admin.pages.pages.faq');
    }
    public function contact_us() 
    {
        return view('admin.pages.pages.contact_us');
    }

}
