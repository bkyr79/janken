<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JankenController extends Controller
{
    public function index()
    {
        return view('janken.start');
    }
}
