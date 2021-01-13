@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.select2') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 card-box">
        <form class="parsley-examples"
            action="{{ !isset($visit) ? route('visits.store') : route('visits.update', $visit->id) }}" method="POST">
            @csrf
            @if (isset($visit))
            @method('put')
            @endif

            <h4 class="header-title">{{ $formTitle }}</h4>
            <p class="sub-header"></p>

            <div class="form-group clearfix">
                <label for="patient" class="col-form-label control-label">Pasien<span
                        class="text-danger">*</span></label>
                <div>
                    <select class="form-control select2" id="patient" name="patient" required>
                        <option disabled selected>-- Masukkan NIK atau nama pasien --</option>
                        @php
                        $selectedPatient = !isset($visit) ? old('patient') : $visit->patient_id
                        @endphp

                        @foreach ($patients as $patient)
                        <option value="{{ $patient->id }}" @if ($selectedPatient===$patient->id) selected @endif>
                            {{ "$patient->nik | $patient->name" }}</option>
                        @endforeach
                    </select>
                </div>
                @error('patient')
                <ul class="parsley-errors-list filled">
                    <li>{{ $message }}</li>
                </ul>
                @enderror
            </div>

            <div class="form-group clearfix">
                <label class="control-label" for="penjamin-input">Penjamin<span class="text-danger">*</span></label>
                <div>
                    <select class="form-control select2" id="penjamin-input" name="guarantator" required>
                        <option disabled selected>-- Pilih penjamin --</option>
                        @php
                        $selectedGuarantator = !isset($visit) ? old('guarantator') : $visit->guarantator
                        @endphp

                        @foreach (config('constant.guarantator') as $guarantator)
                        <option value="{{ $guarantator }}" @if ($selectedGuarantator===$guarantator) selected @endif>
                            {{ $guarantator }}</option>
                        @endforeach
                    </select>
                </div>
                @error('guarantator')
                <ul class="parsley-errors-list filled">
                    <li>{{ $message }}</li>
                </ul>
                @enderror
            </div>

            <div id="guarantor-data" style="display: none">
                <div class="form-group clearfix">
                    <label class="control-label" for="nomor-anggota">Nomor Anggota<span
                            class="text-danger">*</span></label>
                    <div>
                        <input id="nomor-anggota" name="member_number" type="text" data-parsley-type="number"
                            class="form-control" value="{{ !isset($visit) ? old('member_number') : $visit->member_number }}">
                    </div>
                    @error('member_number')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="hak-kelas">Hak Kelas<span class="text-danger">*</span></label>
                    <div>
                        <input id="hak-kelas" name="access_rights" type="number" min="1" max="3"
                            data-parsley-type="number" class="form-control" value="{{ !isset($visit) ? old('access_rights') : $visit->access_rights }}">
                    </div>
                    @error('access_rights')
                    <ul class="parsley-errors-list filled">
                        <li>{{ $message }}</li>
                    </ul>
                    @enderror
                </div>
            </div>

            <div class="form-group clearfix">
                <label class="control-label" for="poli-tujuan">Poli Tujuan<span class="text-danger">*</span></label>
                <div>
                    <select class="form-control select2" id="poli-tujuan" name="polyclinic" required>
                        <option disabled selected>-- Pilih poliklinik --</option>
                        @php
                        $selectedpolyclinic = !isset($visit) ? old('polyclinic') : $visit->polyclinic_id
                        @endphp

                        @foreach ($polyclinics as $polyclinic)
                        <option value="{{ $polyclinic->id }}" @if($selectedpolyclinic===$polyclinic->id) selected
                            @endif>{{ $polyclinic->polyclinic_name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('polyclinic')
                <ul class="parsley-errors-list filled">
                    <li>{{ $message }}</li>
                </ul>
                @enderror
            </div>

            <div class="form-group clearfix">
                <label for="nomor-registrasi" class="col-form-label control-label">Nomor Registrasi<span
                        class="text-danger">*</span></label>
                <div>
                    <input type="text" class="form-control" id="nomor-registrasi" name="registration_number"
                        value="{{ !isset($visit) ? old('registration_number') : $visit->registration_number }}" required>
                </div>
                @error('registration_number')
                <ul class="parsley-errors-list filled">
                    <li>{{ $message }}</li>
                </ul>
                @enderror
            </div>

            <div class="form-group clearfix">
                <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Wajib
                    diisi.</label>
            </div>

            <div class="button-list" style="float: right">
                <button type="button" class="btn btn-light btn-rounded waves-effect">Batal</button>
                <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('required_js')
{!! config('constant.resources.js.select2') !!}
{!! config('constant.resources.js.jquery_mockjax') !!}
{!! config('constant.resources.js.jquery_autocomplete') !!}
{!! config('constant.resources.js.form_advanced_init') !!}

{{-- form validation --}}
{!! config('constant.resources.js.parsley') !!}
{!! config('constant.resources.js.form_validation_init') !!}

{!! config('constant.resources.js.semar') !!}

<script>
    $(document).ready(function () {
        $('#penjamin-input').change(function (e) {
            const guarantor = $('#penjamin-input').val();

            if (guarantor === 'Umum') {
                $('#guarantor-data').css('display', 'none');
                $('#nomor-anggota').removeAttr('required');
                $('#hak-kelas').removeAttr('required');
            } else {
                $('#guarantor-data').css('display', '');
                $('#nomor-anggota').attr('required', 'required');
                $('#hak-kelas').attr('required', 'required');
            }
        });
    });

</script>
@endsection
