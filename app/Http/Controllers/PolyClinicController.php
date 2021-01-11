<?php

namespace App\Http\Controllers;

use App\Models\Poly;
use App\Models\Polyclinic;
use Illuminate\Http\Request;

class PolyClinicController extends Controller
{
    private $subtitle = 'Poliklinik';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['subtitle'] = $this->subtitle;
        $data['breadcrumbs'] = [$this->subtitle];
        $data['polyclinics'] = Polyclinic::all();

        return view('poly-clinic-data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poly  $poly
     * @return \Illuminate\Http\Response
     */
    public function show(Poly $poly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poly  $poly
     * @return \Illuminate\Http\Response
     */
    public function edit(Poly $poly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poly  $poly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poly $poly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poly  $poly
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poly $poly)
    {
        //
    }
}
