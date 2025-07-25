<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Display all users
    public function index()
    {
        $users = User::all(); // Fetch all users from the DB
        return view('users.index', compact('users'));
    }

    // Show form to create a new user
    public function create()
    {
        return view('users.create');
    }

    // Store new user in database
   // Store new user in database
   public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'position'   => 'required|string|max:255',
            'office'     => 'required|string|max:255',
            'age'        => 'required|integer|min:1',
            'start_date' => 'required|date',
            'salary'     => 'required|numeric|min:0',
            'password'   => 'required|string|min:6',
        ]);

        // Store the user with hashed password
        User::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'position'   => $request->position,
            'office'     => $request->office,
            'age'        => $request->age,
            'start_date' => $request->start_date,
            'salary'     => $request->salary,
            'password'   => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'User added successfully.');
    }

   

}
