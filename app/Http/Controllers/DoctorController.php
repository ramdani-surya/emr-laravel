<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

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
        $data['subtitle']    = $this->subtitle;
        $data['breadcrumbs'] = [$this->subtitle];
        $data['doctors']     = User::where('role', 'doctor')->get();

        return view('doctor-data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formTitle = 'Tambah Dokter';

        $data['subtitle']    = $this->subtitle;
        $data['breadcrumbs'] = [$this->subtitle, $formTitle];
        $data['formTitle']   = $formTitle;
        $data['actionUrl']   = route('doctors.store');
        $data['backUrl']     = route('doctors.index');

        return view('layouts/human-resources-add', $data);
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
            'photo'  => 'nullable|image',
            'name'   => 'required',
            "gender" => [
                'required',
                Rule:: in(config('constant.gender')),
            ],
            "birthplace"       => 'required',
            "birthdate"        => 'required|date',
            "complete_address" => 'required',
            "religion"         => [
                'required',
                Rule:: in(config('constant.religion')),
            ],
            "polyclinic" => 'required|exists:polyclinics,id',
            "phone"      => 'required|unique:users,phone',
            'email'      => 'required|unique:users,email',
            'password'   => 'required|string|min:6',
        ]);

        $path = ($request->photo)
                ? $request->file('photo')->store(config('constant.file_directory.doctor'))
                : null;

        User::create([
            'photo'            => $path,
            'name'             => $request->name,
            "gender"           => $request->gender,
            "birthplace"       => $request->birthplace,
            "birthdate"        => $request->birthdate,
            "complete_address" => $request->complete_address,
            "religion"         => $request->religion,
            "polyclinic_id"    => $request->polyclinic,
            "phone"            => $request->phone,
            'email'            => $request->email,
            'password'         => bcrypt($request->password),
            'role'             => 'doctor',
        ]);

        return redirect(route('doctors.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(User $doctor)
    {
        $formTitle = 'Edit Dokter';

        $data['subtitle']    = $this->subtitle;
        $data['breadcrumbs'] = [$this->subtitle, $formTitle];
        $data['formTitle']   = $formTitle;
        $data['actionUrl']   = route('doctors.update', $doctor->id);
        $data['backUrl']     = route('doctors.index');
        $data['user']        = $doctor;

        return view('layouts/human-resources-add', $data);
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
        $request->validate([
            'photo'  => 'nullable|image',
            'name'   => 'required',
            "gender" => [
                'required',
                Rule::in(config('constant.gender')),
            ],
            "birthplace"       => 'required',
            "birthdate"        => 'required|date',
            "complete_address" => 'required',
            "religion"         => [
                'required',
                Rule::in(config('constant.religion')),
            ],
            "polyclinic" => 'required|exists:polyclinics,id',
            "phone"      => "required|unique:users,phone,$doctor->id",
            'email'      => "required|unique:users,email,$doctor->id",
            'password'   => 'nullable|string|min:6',
        ]);

        $path = ($request->photo)
                ? $request->file('photo')->store(config('constant.file_directory.doctor'))
                : $doctor->photo;

        if ($request->photo) {
            Storage::delete($doctor->photo);
        }

        $doctorData = [
            'photo'            => $path,
            'name'             => $request->name,
            "gender"           => $request->gender,
            "birthplace"       => $request->birthplace,
            "birthdate"        => $request->birthdate,
            "complete_address" => $request->complete_address,
            "religion"         => $request->religion,
            "polyclinic_id"    => $request->polyclinic,
            "phone"            => $request->phone,
            'email'            => $request->email,
            'role'             => 'doctor',
        ];

        if ($request->password) {
            $doctorData['password'] = bcrypt($request->password);
        }

        $doctor->update($doctorData);

        return redirect(route('doctors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $doctor)
    {
        $doctor->delete();

        return  redirect(route('doctors.index'));
    }
}
