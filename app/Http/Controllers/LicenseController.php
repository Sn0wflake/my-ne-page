<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $coordinates = [
            'latitude' => 24.129550139,
            'longitude' => 56.949215859
        ];

        $licenseInfo = [
            'number' => '80/2024',
            'issueDate' => '25.11.2024'
        ];

        return view('contact.index', compact('coordinates', 'licenseInfo'));
    }

    public function downloadPdf($id)
    {
        // Assuming your PDF is stored in storage/app/public/licenses
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
