<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Fetch all users (change this to the relevant table)
        
        return view('dashboard', compact('user'));
    }
}


