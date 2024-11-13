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

    public function clear()
    {
        /*Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');*/

        return Inertia::render('Clear/Index', [
            'title' => 'Кэш очищен!',
        ]);
    }
}
