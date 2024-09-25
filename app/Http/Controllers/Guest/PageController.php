<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $greeting = 'Benvenuto/a!';
        return view('home', compact('greeting'));
    }
}
