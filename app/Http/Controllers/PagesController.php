<?php

namespace App\Http\Controllers;

use App\Action\BeatsAction;
use App\Models\Beats;
use App\Models\Tracks;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function beats()
    {
        $beats = Beats::get();
        return view('beats', compact('beats'));
    }

    public function credits()
    {
        return view('credits');
    }

    public function github()
    {
        return view('github');
    }

    public function tracks()
    {
        $tracks = Tracks::get();
        return view('tracks', compact('tracks'));
    }

    public function addBeat()
    {
        $action = new BeatsAction();
        return $action->heandle();
    }
}
