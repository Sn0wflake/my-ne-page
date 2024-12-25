<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = [
            [
                'title' => 'Software Developer',
                'description' => 'We are looking for an experienced PHP developer.',
                'location' => 'Riga, Latvia',
                'type' => 'Full-time'
            ],
            [
                'title' => 'Project Manager',
                'description' => 'Seeking a project manager with IT background.',
                'location' => 'Remote',
                'type' => 'Full-time'
            ]
        ];

        return view('jobs.index', compact('jobs'));
    }
}
