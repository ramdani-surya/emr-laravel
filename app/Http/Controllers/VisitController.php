<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use App\Models\Patient;
use App\Models\Polyclinic;
use App\Models\Queue;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VisitController extends Controller
{
    private $subtitle = 'Kunjungan';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['subtitle']    = $this->subtitle;
        $data['breadcrumbs'] = [$this->subtitle];
        $data['visits'] = Visit::latest()->get();

        return view('visit-data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['subtitle']    = $this->subtitle;
        $data['breadcrumbs'] = [$this->subtitle, 'Tambah Kunjungan'];
        $data['polyclinics'] = Polyclinic::all();
        $data['patients']    = Patient::all();

        return view('visit-add', $data);
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
            "patient"    => 'required|numeric|exists:patients,id',
            "guarantator"          => [
                'required',
                Rule:: in(config('constant.guarantator')),
            ],
            "member_number"       => 'required_if:guarantator,BPJS',
            "access_rights"       => 'required_if:guarantator,BPJS|nullable|numeric|between:1,3',
            "polyclinic"          => 'required|exists:polyclinics,id',
            "registration_number" => 'required|unique:visits,registration_number',
        ]);

        // buat data kunjungan
        $visitData = $request->only(
            "guarantator",
            "member_number",
            "access_rights",
            "registration_number"
        );
        $visitData['patient_id'] = $request->patient;
        $visitData['polyclinic_id'] = $request->polyclinic;

        $visit = Visit::create($visitData);

        // buat rekam medis untuk kunjungan yang telah dibuat
        MedicalRecord::create([
            'patient_id' => $request->patient,
            'visit_id' => $visit->id,
        ]);

        // buatkan antrean
        $latestQueueNumber = Queue::whereDate('created_at', Carbon::today())
            ->where('polyclinic_id', $visit->polyclinic_id)
            ->max('queue_number');

        $newQueueNumber = ($latestQueueNumber) ? $latestQueueNumber+1 : 1;

        Queue::create([
            'visit_id'      => $visit->id,
            'polyclinic_id' => $visit->polyclinic_id,
            'queue_number'  => $newQueueNumber
        ]);

        return redirect(route('visits.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        //
    }
}
