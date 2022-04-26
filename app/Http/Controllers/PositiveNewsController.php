<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PositiveNewsController extends Controller
{
    public function index()
    {
        return view('positive-news');
    }
}
