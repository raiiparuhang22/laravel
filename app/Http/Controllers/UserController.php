<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users from the DB
        return view('users.index', compact('users')); // Pass to view
    }
}

