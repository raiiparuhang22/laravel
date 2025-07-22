<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role; // ✅ Import the Role model

class RoleController extends Controller
{
    public function showHello() {
        return view("welcome");
    }
}




