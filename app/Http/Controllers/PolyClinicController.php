<?php

namespace App\Http\Controllers;

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
        $data['subtitle']    = $this->subtitle;
        $data['breadcrumbs'] = [$this->subtitle];
        $data['polyclinics'] = Polyclinic::all();

        return view('poly-clinic-data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'polyclinic_name' => 'required|unique:polyclinics,polyclinic_name',
            'location'        => 'required',
        ]);

        Polyclinic::create($request->all());

        return redirect(route('polyclinic.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Polyclinic $polyclinic)
    {
        $request->validate([
            'polyclinic_name' => "required|unique:polyclinics,polyclinic_name,$polyclinic->id",
            'location'        => 'required',
        ]);

        $polyclinic->update($request->all());

        return redirect(route('polyclinic.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polyclinic  $polyclinic)
    {
        $polyclinic->delete();

        return redirect(route('polyclinic.index'));
    }
}
