<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller  // Changed from JobController to ContactController
{
    public function index()
    {
        $coordinates = [
            'latitude' => 51.5074,  // Example: London coordinates
            'longitude' => -0.1278
        ];
        // Your contact page logic here
        return view('contact.index');
    }
}
