<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    private $subtitle = 'Perawat';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle];

        return view('nurse-data', compact('subtitle', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formTitle   = 'Tambah Perawat';
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle, $formTitle];

        return view('layouts/human-resources-add', compact('formTitle', 'subtitle', 'breadcrumbs'));
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
     * @param  \App\User  $nurse
     * @return \Illuminate\Http\Response
     */
    public function show(User $nurse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $nurse
     * @return \Illuminate\Http\Response
     */
    public function edit(User $nurse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $nurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $nurse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $nurse
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $nurse)
    {
        //
    }
}
