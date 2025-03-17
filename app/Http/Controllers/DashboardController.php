<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // para isang user lang ang pwede ilagay sa dashboard
        
        return view('dashboard', compact('user'));
    }
}


