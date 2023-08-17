<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampgroundsController extends Controller
{
    public function index()
    {
        return view('campgrounds');
    }
}
