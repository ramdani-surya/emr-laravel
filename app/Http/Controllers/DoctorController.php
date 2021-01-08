<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    private $subtitle = 'Dokter';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle];

        return view('doctor-data', compact('subtitle', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formTitle = 'Tambah Dokter';
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle, $formTitle];

        return view('layouts/human-resources-add', compact('subtitle', 'breadcrumbs', 'formTitle'));
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
     * @param  \App\User  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(User $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(User $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $doctor)
    {
        //
    }
}
