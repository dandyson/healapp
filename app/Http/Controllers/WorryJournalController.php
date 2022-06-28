<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorryJournalController extends Controller
{
    public function index()
    {
        return view('worry-journal');
    }
}
