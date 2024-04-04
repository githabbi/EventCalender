<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuserController extends Controller
{
    public function index(Request $request)
    {
        return view('suser');
    }
}
