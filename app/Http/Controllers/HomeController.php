<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $staffList = Staff::with('user')->get();
        return view('welcome', compact('staffList'));
    }
}
