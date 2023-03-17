<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Jela extends Controller
{
    function index()
    {
        $podatci = Jela::all();
        return view('jela', ['podatci' => $podatci]);
    }
}
