<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PatientController extends Controller
{
    private $subtitle = 'Pasien';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['subtitle']    = $this->subtitle;
        $data['breadcrumbs'] = [$this->subtitle];
        $data['patients']    = Patient::all();

        return view('patient-data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle, 'Tambah Pasien'];

        return view('patient-add', compact('subtitle', 'breadcrumbs'));
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
            "nik"    => 'required|numeric|unique:patients,nik',
            "name"   => 'required',
            "gender" => [
                'required',
                Rule::in(config('constant.gender')),
            ],
            "birthplace"  => 'required',
            "birthdate"   => 'required|date',
            "blood_group" => [
                'required',
                Rule::in(config('constant.blood_group')),
            ],
            "complete_address" => 'required',
            "phone"            => 'required',
            "religion"         => [
                'required',
                Rule::in(config('constant.religion')),
            ],
            "profession"     => 'nullable',
            "marital_status" => [
                'required',
                Rule::in(config('constant.marital_status')),
            ],
        ]);

        Patient::create($request->all());

        return redirect(route('patients.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $subtitle    = $this->subtitle;
        $breadcrumbs = [$this->subtitle, 'Detail Pasien'];

        return view('patient-detail', compact('subtitle', 'breadcrumbs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
