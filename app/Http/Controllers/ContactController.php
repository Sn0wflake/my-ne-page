<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller  // Changed from JobController to ContactController
{
    public function index()
    {
        // Your contact page logic here
        return view('contact.index');
    }
}
