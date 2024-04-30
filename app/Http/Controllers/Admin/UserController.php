<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $totalAdmins = User::where('role_as', 1)->count();
        $totalUsers = User::where('role_as', 0)->count();

        // Other dashboard logic goes here

        return view('admin.dashboard', compact('totalAdmins', 'totalUsers'));
    }
}

