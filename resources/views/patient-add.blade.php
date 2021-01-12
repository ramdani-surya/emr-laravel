@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.select2') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">{{ !isset($patient) ? 'Tambah' : 'Edit' }} Pasien</h4>
            <p class="sub-header"></p>

            <form action="{{ !isset($patient) ? route('patients.store') : route('patients.update', $patient->id) }}"
                class="parsley-examples" method="POST">
                @csrf
                @if (isset($patient))
                @method('put')
                @endif
                <div class="form-group clearfix">
                    <label class="control-label" for="nik">NIK <span class="text-danger">*</span></label>
                    <div id="nik-form">
                        <input id="nik" name="nik" type="text" class="form-control"
                            value="{{ !isset($patient) ? old('nik') : $patient->nik }}" required>
                    </div>
                    @error('nik')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="nama-lengkap">Nama Lengkap<span
                            class="text-danger">*</span></label>
                    <div>
                        <input id="nama-lengkap" name="name" type="text" class="form-control"
                            value="{{ !isset($patient) ? old('name') : $patient->name }}" required>
                    </div>
                    @error('name')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="jenis-kelamin">Jenis Kelamin<span
                            class="text-danger">*</span></label>
                    <div>
                        <select class="form-control select2" id="jenis-kelamin" name="gender" required>
                            <option disabled selected>-- Pilih jenis kelamin --</option>
                            @php
                            $selectedGender = !isset($patient) ? old('gender') : $patient->gender
                            @endphp

                            @foreach (config('constant.gender') as $gender)
                            <option value="{{ $gender }}" @if ($selectedGender === $gender) selected @endif>{{ $gender }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    @error('gender')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-row clearfix">
                    <div class="form-group col-md-4">
                        <label for="tempat-lahir" class="col-form-label control-label">Tempat,<span
                                class="text-danger">*</span></label>
                        <div>
                            <input type="text" class="form-control" id="tempat-lahir" name="birthplace"
                                value="{{ !isset($patient) ? old('birthplace') : $patient->birthplace }}" required>
                        </div>
                        @error('birthplace')
                        <ul class="parsley-errors-list filled">
                            <li>{{ $message }}</li>
                        </ul>
                        @enderror
                    </div>

                    <div class="form-group col-md-8">
                        <label for="tanggal-lahir" class="col-form-label control-label">Tanggal Lahir<span
                                class="text-danger">*</span></label>
                        <div>
                            <input type="date" class="form-control" id="tanggal-lahir" name="birthdate"
                                value="{{ !isset($patient) ? old('birthdate') : $patient->birthdate }}" required>
                        </div>
                        @error('birthdate')
                        <ul class="parsley-errors-list filled">
                            <li>{{ $message }}</li>
                        </ul>
                        @enderror
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="golongan-darah">Golongan Darah</label>
                    <div>
                        <select class="required form-control select2" id="golongan-darah" name="blood_group" required>
                            @php
                            $selectedBlood = !isset($patient) ? old('blood_group') : $patient->blood_group
                            @endphp

                            @foreach (config('constant.blood_group') as $blood_group)
                            <option value="{{ $blood_group }}" @if ($selectedBlood===$blood_group) selected @endif>
                                {{ $blood_group }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('blood_group')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="alamat">Alamat Lengkap<span class="text-danger">*</span></label>
                    <div>
                        <textarea class="form-control" name="complete_address" id="alamat" rows="5"
                            required>{{ !isset($patient) ? old('complete_address') : $patient->complete_address }}</textarea>
                    </div>
                    @error('complete_address')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="nomor-telepon">Nomor Telepon<span
                            class="text-danger">*</span></label>
                    <div>
                        <input class="form-control" id="nomor-telepon" type="text" data-toggle="input-mask"
                            data-mask-format="+(00) 000-0000-0000" placeholder="+(62) 812-3456-7890" name="phone"
                            value="{{ !isset($patient) ? old('phone') : $patient->phone }}" required>
                        <span class="font-13 text-muted">Masukkan dengan kode area.</span>
                    </div>
                    @error('phone')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="agama">Agama<span class="text-danger">*</span></label>
                    <div>
                        <select class="required form-control select2" id="agama" name="religion" required>
                            <option disabled selected>-- Pilih agama --</option>
                            @php
                            $selectedReligion = !isset($patient) ? old('religion') : $patient->religion
                            @endphp

                            @foreach (config('constant.religion') as $religion)
                            <option value="{{ $religion }}" @if ($selectedReligion===$religion) selected @endif>
                                {{ $religion }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('religion')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="pekerjaan">Pekerjaan</label>
                    <div>
                        <input class="form-control" id="pekerjaan" type="text" name="profession"
                            value="{{ !isset($patient) ? old('profession') : $patient->profession }}">
                    </div>
                </div>
                @error('profession')
                <ul class="parsley-errors-list filled">
                    <li>{{ $message }}</li>
                </ul>
                @enderror

                <div class="form-group clearfix">
                    <label class="control-label" for="status-pernikahan">Status Pernikahan<span
                            class="text-danger">*</span></label>
                    <div>
                        <select class="form-control select2" id="status-pernikahan" name="marital_status" required>
                            <option disabled selected>-- Pilih status pernikahan --</option>
                            @php
                            $selectedMarital = !isset($patient) ? old('marital_status') : $patient->marital_status
                            @endphp

                            @foreach (config('constant.marital_status') as $marital_status)
                            <option value="{{ $marital_status }}" @if ($selectedMarital===$marital_status) selected
                                @endif>
                                {{ $marital_status }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('marital_status')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Wajib
                        diisi.</label>
                </div>


                <div class="form-group text-right mb-0">
                    <a href="{{ route('patients.index') }}" class="btn btn-light btn-rounded waves-effect">Batal</a>
                    <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('required_js')
{!! config('constant.resources.js.select2') !!}
{!! config('constant.resources.js.jquery_mockjax') !!}
{!! config('constant.resources.js.jquery_mockjax') !!}
{!! config('constant.resources.js.form_advanced_init') !!}

{{-- form validation --}}
{!! config('constant.resources.js.parsley') !!}
{!! config('constant.resources.js.form_validation_init') !!}

{{-- form masks --}}
{!! config('constant.resources.js.form_masks') !!}
{!! config('constant.resources.js.form_masks_init') !!}
@endsection
