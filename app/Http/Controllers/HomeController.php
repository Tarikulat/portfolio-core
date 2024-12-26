<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // The index method to load the homepage
    public function index()
    {
        return view('home');  // Ensure 'home.blade.php' exists in the resources/views folder
    }

    // Other methods for additional pagesp
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
