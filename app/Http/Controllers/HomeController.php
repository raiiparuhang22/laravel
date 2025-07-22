<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        $name = 'Paruhang Rai';
        return view('pages.welcome', compact('name'));
    }
}
