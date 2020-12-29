<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRController extends Controller
{
    private $subtitle = 'SDM';

    public function nurse()
    {
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle, 'Perawat'];

        return view('nurse-data', compact('subtitle', 'breadcrumbs'));
    }

    public function staff()
    {
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle, 'Staf Administrasi'];

        return view('staff-data', compact('subtitle', 'breadcrumbs'));
    }

    public function admin()
    {
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle, 'Admin'];

        return view('admin-data', compact('subtitle', 'breadcrumbs'));
    }
}
