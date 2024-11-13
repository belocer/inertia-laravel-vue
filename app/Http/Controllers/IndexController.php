<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('Home/Index', [
            'title' => 'Home page',
        ]);
    }

    public function about()
    {
        return Inertia::render('About/Index', [
            'title' => 'About me',
        ]);
    }
}
