<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function beats()
    {
        return view('beats');
    }

    public function credits()
    {
        return view('credits');
    }
}
