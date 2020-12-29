<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    private $subtitle = 'Laporan';

    public function drug()
    {
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle];

        return view('report', compact('subtitle', 'breadcrumbs'));
    }
}
