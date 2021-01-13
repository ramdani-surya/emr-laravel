<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class HumanResourcesController extends Controller
{
    private $doctorSubtitle = 'Dokter';
    private $nurseSubtitle  = 'Perawat';
    private $staffSubtitle  = 'Staf Administrasi';
    private $adminSubtitle  = 'Administrator';

    /**
     * Display a listing of the resource.
     *
     * @param  $link
     * @return \Illuminate\Http\Response
     */
    public function index($link)
    {
        $subtitle = $this->specifySubtitle($link);

        $data['link']        = $link;
        $data['subtitle']    = $subtitle;
        $data['breadcrumbs'] = [$subtitle];
        $data['dataTitle']   = "Data $subtitle";
        $data['users']       = User::where('role', $link)->get();
        $data['createUrl']   = route('hr.create', $link);
        $data['editUrl']     = route('hr.edit', $link);
        $data['deleteUrl']   = route('hr.destroy', $link);

        return view('human-resources-data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  $link
     * @return \Illuminate\Http\Response
     */
    public function create($link)
    {
        $subtitle  = $this->specifySubtitle($link);
        $formTitle = "Tambah $subtitle";

        $data['subtitle']    = $subtitle;
        $data['breadcrumbs'] = [$subtitle, $formTitle];
        $data['formTitle']   = $formTitle;
        $data['actionUrl']   = route('hr.store', $link);
        $data['backUrl']     = route('hr.index', $link);

        return view('human-resources-add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $link
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($link, Request $request)
    {
        $validateData = [
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
            "phone"      => 'required|unique:users,phone',
            'email'      => 'required|unique:users,email',
            'password'   => 'required|string|min:6',
        ];

        if ($link === 'doctor') {
            $validateData['polyclinic'] = 'required|exists:polyclinics,id';
        }

        $request->validate($validateData);

        $path = ($request->photo)
            ? $request->file('photo')->store("/public/users/$link")
            : null;

        User::create([
            'photo'            => $path,
            'name'             => $request->name,
            "gender"           => $request->gender,
            "birthplace"       => $request->birthplace,
            "birthdate"        => $request->birthdate,
            "complete_address" => $request->complete_address,
            "religion"         => $request->religion,
            "polyclinic_id"    => ($request->polyclinic) ? $request->polyclinic : null,
            "phone"            => $request->phone,
            'email'            => $request->email,
            'password'         => bcrypt($request->password),
            'role'             => $link,
        ]);

        return redirect(route('hr.index', $link));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $link
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($link, User $user)
    {
        $subtitle  = $this->specifySubtitle($link);
        $formTitle = "Edit $subtitle";

        $data['subtitle']    = $subtitle;
        $data['breadcrumbs'] = [$subtitle, $formTitle];
        $data['formTitle']   = $formTitle;
        $data['actionUrl']   = route('hr.update', [$link, $user->id]);
        $data['backUrl']     = route('hr.index', $link);
        $data['user']        = $user;

        return view('human-resources-add', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  $link
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($link, Request $request, User $user)
    {
        $validateData = [
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
            "phone"      => "required|unique:users,phone,$user->id",
            'email'      => "required|unique:users,email,$user->id",
            'password'   => 'nullable|string|min:6',
        ];

        if ($link === 'doctor') {
            $validateData['polyclinic'] = 'required|exists:polyclinics,id';
        }

        $request->validate($validateData);

        $path = ($request->photo)
            ? $request->file('photo')->store("/public/users/$link")
            : $user->photo;

        if ($request->photo) {
            Storage::delete($user->photo);
        }

        $userData = [
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
            'role'             => $link,
        ];

        if ($request->password) {
            $userData['password'] = bcrypt($request->password);
        }

        $user->update($userData);

        return redirect(route('hr.index', $link));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $link
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($link, User $user)
    {
        if ($link !== 'doctor' && $link !== 'nurse') {
            Storage::delete($user->photo);
        }

        $user->delete();

        return  redirect(route('hr.index', $link));
    }

    private function specifySubtitle($link)
    {
        switch ($link) {
            case 'doctor':
                return $this->doctorSubtitle;
                break;

            case 'nurse':
                return $this->nurseSubtitle;
                break;

            case 'staff':
                return $this->staffSubtitle;
                break;

            default:
                return $this->adminSubtitle;
                break;
        }
    }
}
