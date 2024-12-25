<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = [
            [
                'title' => [
                    'en' => 'Software Developer',
                    'ru' => 'Разработчик ПО',
                    'lv' => 'Programmētājs',
                    'de' => 'Softwareentwickler'
                ],
                'description' => [
                    'en' => 'We are looking for a PHP developer with Laravel experience.',
                    'ru' => 'Ищем PHP разработчика со знанием Laravel.',
                    'lv' => 'Meklējam PHP izstrādātāju ar Laravel pieredzi.',
                    'de' => 'Wir suchen einen PHP-Entwickler mit Laravel-Erfahrung.'
                ],
                'location' => [
                    'en' => 'Riga, Latvia',
                    'ru' => 'Рига, Латвия',
                    'lv' => 'Rīga, Latvija',
                    'de' => 'Riga, Lettland'
                ],
                'type' => [
                    'en' => 'Full-time',
                    'ru' => 'Полная занятость',
                    'lv' => 'Pilna slodze',
                    'de' => 'Vollzeit'
                ]
            ],
            [
                'title' => [
                    'en' => 'Project Manager',
                    'ru' => 'Проектный менеджер',
                    'lv' => 'Projektu vadītājs',
                    'de' => 'Projektmanager'
                ],
                'description' => [
                    'en' => 'Seeking a project manager with IT background.',
                    'ru' => 'Ищем проектного менеджера с опытом в IT.',
                    'lv' => 'Meklējam projektu vadītāju ar IT pieredzi.',
                    'de' => 'Suchen Projektmanager mit IT-Hintergrund.'
                ],
                'location' => [
                    'en' => 'Remote',
                    'ru' => 'Удаленно',
                    'lv' => 'Attālināti',
                    'de' => 'Remote'
                ],
                'type' => [
                    'en' => 'Full-time',
                    'ru' => 'Полная занятость',
                    'lv' => 'Pilna slodze',
                    'de' => 'Vollzeit'
                ]
            ]
        ];

        return view('jobs.index', ['jobs' => $jobs]);
    }
}
