<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeditationTimerController extends Controller
{
    public function index()
    {
        return view('meditation-timer');
    }
}
