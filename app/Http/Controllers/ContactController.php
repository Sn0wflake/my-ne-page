<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $coordinates = [
            'latitude' => 51.5074,  // Example: London coordinates
            'longitude' => -0.1278
        ];

        $licenseInfo = [
            'number' => '29/2023',
            'issueDate' => '25.04.2023'
        ];

        return view('contact.index', compact('coordinates', 'licenseInfo'));
    }

    public function downloadPdf($id)
    {
        $path = storage_path('app/public/licenses/license.pdf');

        if (!file_exists($path)) {
            abort(404, 'PDF file not found');
        }

        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="license.pdf"'
        ]);
    }
}
