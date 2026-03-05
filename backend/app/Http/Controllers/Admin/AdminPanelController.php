<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class AdminPanelController extends Controller
{
    public function users(): Response
    {
        return Inertia::render('Admin/Users/Index', [
            'title' => 'User',
        ]);
    }

    public function trucks(): Response
    {
        return Inertia::render('Admin/Trucks/Index', [
            'title' => 'Truck',
        ]);
    }

    public function containers(): Response
    {
        return Inertia::render('Admin/Containers/Index', [
            'title' => 'Container',
        ]);
    }

    public function documents(): Response
    {
        return Inertia::render('Admin/Documents/Index', [
            'title' => 'Documents',
        ]);
    }

    public function routes(): Response
    {
        return Inertia::render('Admin/Routes/Index', [
            'title' => 'Route',
        ]);
    }
}
