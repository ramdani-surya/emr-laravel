@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.select2') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">{{ $formTitle }}</h4>
            <p class="sub-header"></p>

            <form class="parsley-examples" action="{{ $actionUrl }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($user))
                @method('put')
                @endif
                <div class="form-group clearfix">
                    <label class="control-label" for="foto">Foto</label>
                    <div>
                        <input type="file" id="foto" class="filestyle" data-text="Masukkan foto" name="photo"
                            value="{{ !isset($user) ? old('photo') : $user->photo }}">
                    </div>
                    @error('photo')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="nama_lengkap">Nama Lengkap <span
                            class="text-danger">*</span></label>
                    <div>
                        <input id="nama_lengkap" name="name" type="text" class="form-control" parsley-trigger="change"
                            value="{{ !isset($user) ? old('name') : $user->name }}" required>
                    </div>
                    @error('name')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="jenis_kelamin">Jenis Kelamin<span
                            class="text-danger">*</span></label>
                    <div>
                        <select class="form-control select2" id="jenis_kelamin" name="gender" required>
                            <option disabled selected>-- Pilih jenis kelamin --</option>

                            @php
                            $selectedGender = !isset($user) ? old('gender') : $user->gender
                            @endphp

                            @foreach (config('constant.gender') as $gender)
                            <option value="{{ $gender }}" @if ($selectedGender===$gender) selected @endif>{{ $gender }}
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
                        <label for="tempat_lahir" class="col-form-label control-label">Tempat,<span
                                class="text-danger">*</span></label>
                        <div>
                            <input type="text" class="form-control" id="tempat_lahir" name="birthplace"
                                value="{{ !isset($user) ? old('birthplace') : $user->birthplace }}" required>
                        </div>
                        @error('birthplace')
                        <ul class="parsley-errors-list filled">
                            <li>{{ $message }}</li>
                        </ul>
                        @enderror
                    </div>

                    <div class="form-group col-md-8">
                        <label for="tanggal_lahir" class="col-form-label control-label">Tanggal Lahir<span
                                class="text-danger">*</span></label>
                        <div>
                            <input type="date" class="form-control" id="tanggal_lahir" name="birthdate"
                                value="{{ !isset($user) ? old('birthdate') : $user->birthdate }}" required>
                        </div>
                        @error('birthdate')
                        <ul class="parsley-errors-list filled">
                            <li>{{ $message }}</li>
                        </ul>
                        @enderror
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="alamat">Alamat Lengkap<span class="text-danger">*</span></label>
                    <div>
                        <textarea class="form-control" name="complete_address" id="alamat" rows="5"
                            required>{{ !isset($user) ? old('complete_address') : $user->complete_address }}</textarea>
                    </div>
                    @error('complete_address')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="telepon">Telepon<span class="text-danger">*</span></label>
                    <div>
                        <input class="form-control" id="telepon" type="text" data-toggle="input-mask"
                            data-mask-format="+(00) 000-0000-0000" placeholder="+(62) 812-3456-7890" name="phone"
                            value="{{ !isset($user) ? old('phone') : $user->phone }}" required>
                        <span class="font-13 text-muted">Masukkan dengan kode area.</span>
                    </div>
                    @error('phone')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="email">Email<span class="text-danger">*</span></label>
                    <div>
                        <input class="form-control" id="email" type="email" parsley-trigger="change" name="email"
                            value="{{ !isset($user) ? old('email') : $user->email }}" required>
                    </div>
                    @error('email')
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
                            $selectedReligion = !isset($user) ? old('religion') : $user->religion
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

                <div class="form-group clearfix password-form">
                    <label class="control-label" for="password">Password @if (!isset($user)) <span
                            class="text-danger">*</span> @endif</label>
                    <div>
                        <input id="password" name="password" type="password" class="form-control" @if (!isset($user))
                            required @endif>
                        @if (isset($user))
                        <span class="font-13 text-muted">Masukkan password baru untuk ubah password.</span>
                        @endif
                    </div>
                    @error('password')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Wajib
                        diisi.</label>
                </div>

                <div class="form-group clearfix">
                    <div class="button-list" style="float: right">
                        <a href="{{ $backUrl }}" class="btn btn-light btn-rounded waves-effect">Batal</a>
                        <button type="submit"
                            class="btn btn-primary btn-rounded waves-light waves-effect">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('required_js')

<script>
    $(function () {
        const pageTitle = $('.header-title').text();

        if (pageTitle === 'Tambah Dokter' || pageTitle === 'Edit Dokter') {
            $.ajax({
                type: "get",
                url: "/api/polyclinics",
                dataType: "json",
                success: function (response) {
                    let options = '';

                    response.forEach(polyclinic => {
                        options +=
                            `<option value="${polyclinic.id}">${polyclinic.polyclinic_name}</option>`;
                    });

                    $('.password-form').after('<div class="form-group clearfix">' +
                        '<label class="control-label" for="poliklinik">Poliklinik<span class="text-danger">*</span></label>' +
                        '<div>' +
                        '<select class="form-control select2" id="poliklinik" name="polyclinic" required>' +
                        '<option disabled selected>-- Pilih poliklinik --</option>' +
                        options +
                        '</select>' +
                        '</div>' +
                        '</div>');
                }
            });
        }
    })

</script>

{!! config('constant.resources.js.select2') !!}
{!! config('constant.resources.js.boostrap_filestyle') !!}
{!! config('constant.resources.js.form_advanced_init') !!}

{{-- form validation --}}
{!! config('constant.resources.js.parsley') !!}
{!! config('constant.resources.js.form_validation_init') !!}

{{-- form masks --}}
{!! config('constant.resources.js.form_masks') !!}
{!! config('constant.resources.js.form_masks_init') !!}

{!! config('constant.resources.js.semar') !!}
@endsection
