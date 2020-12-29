<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $subtitle = 'Dashboard';

    public function index()
    {
        $subtitle = $this->subtitle;
        $breadcrumbs = [$this->subtitle];

        return view('index', compact('subtitle', 'breadcrumbs'));
    }
}
