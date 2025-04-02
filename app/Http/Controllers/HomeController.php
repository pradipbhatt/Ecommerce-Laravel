<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        // Check if the user is an admin or a regular user
        // and redirect to the appropriate view
        if ($usertype == 'admin') {
            return view('admin.home');
        } else {
            return view('dashboard');
        }
    }
}
