<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    private $subtitle = 'Apotek';

    public function drug()
    {
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle, 'Obat-obatan'];

        return view('drug-data', compact('subtitle', 'breadcrumbs'));
    }

    public function recipe()
    {
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle, 'Resep'];

        return view('recipe-data', compact('subtitle', 'breadcrumbs'));
    }
}
