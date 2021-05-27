<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
    public function chartjs()
    {
        return view('admin.pages.charts.chartjs');
    }

    public function flot()
    {
        return view('admin.pages.charts.flot');
    }
    public function inline()
    {
        return view('admin.pages.charts.inline');
    }
    public function uplot()
    {
        return view('admin.pages.charts.uplot');
    }
}
