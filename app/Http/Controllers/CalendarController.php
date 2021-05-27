<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function widgets()
    {
        return view('admin.pages.Calendar.widgets');
    }
    public function calendar()
    {
        return view('admin.pages.Calendar.calendar');
    }
    public function gallery()
    {
        return view('admin.pages.Calendar.gallery');
    }
    public function kanban()
    {
        return view('admin.pages.Calendar.kanban');
    }
}
