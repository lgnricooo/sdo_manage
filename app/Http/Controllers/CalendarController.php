<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('calendar');
    }
}
