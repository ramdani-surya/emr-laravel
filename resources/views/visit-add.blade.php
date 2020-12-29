@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.select2') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <form class="card-box">
            <h4 class="header-title">Pasien</h4>
            <hr>
            @include('layouts/patient-data-form')
        </form>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12 card-box">
                <h4 class="header-title">PENJAMIN</h4>
                <hr>
                <div class="form-group clearfix">
                    <label class="control-label" for="penjamin-form">Penjamin<span class="text-danger">*</span></label>
                    <div>
                        <select class="form-control select2" id="penjamin-form" name="penjamin" required>
                            <option disabled selected>-- Pilih penjamin --</option>
                            <option value="Umum">Umum</option>
                            <option value="BPJS">BPJS</option>
                        </select>
                    </div>
                </div>

                <div id="guarantor-data" style="display: none">
                    <div class="form-group clearfix">
                        <label class="control-label" for="nomor-anggota">Nomor Anggota<span
                                class="text-danger">*</span></label>
                        <div>
                            <input id="nomor-anggota" name="nomor_anggota" type="text" data-parsley-type="number" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group clearfix">
                        <label class="control-label" for="hak-kelas">Hak Kelas<span class="text-danger">*</span></label>
                        <div>
                            <input id="hak-kelas" name="hak_kelas" type="number" min="1" data-parsley-type="number" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Wajib
                        diisi.</label>
                </div>
            </div>

            <div class="col-md-12 card-box">
                <h4 class="header-title">KUNJUNGAN</h4>
                <hr>
                <div class="form-group clearfix">
                    <label class="control-label" for="poli_tujuan">Poli Tujuan<span class="text-danger">*</span></label>
                    <div>
                        <select class="form-control select2" id="poli_tujuan" name="poli_tujuan" required>
                            <option disabled selected>-- Pilih poliklinik --</option>
                            <option value="Umum">Umum</option>
                            <option value="Gigi">Gigi</option>
                            <option value="Penyakit Dalam">Penyakit Dalam</option>
                            <option value="Anak">Anak</option>
                            <option value="Kebidanan dan Kandungan">Kebidanan & Kandungan</option>
                            <option value="Penyakit Syaraf">Penyakit Syaraf</option>
                            <option value="Kulit dan Kelamin">Kulit dan Kelamin</option>
                            <option value="Mata">Mata</option>
                            <option value="Radiologi">Radiologi</option>
                        </select>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label for="nomor_registrasi" class="col-form-label control-label">Nomor Registrasi<span
                            class="text-danger">*</span></label>
                    <div>
                        <input type="text" class="form-control" id="nomor_registrasi" name="nomor_registrasi" required>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Wajib
                        diisi.</label>
                </div>

                <div class="button-list" style="float: right">
                    <button type="button" class="btn btn-light btn-rounded waves-effect">Batal</button>
                    <button type="submit" class="btn btn-primary btn-rounded waves-light waves-effect">Simpan</button>
                </div>

            </div>
        </div>
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

{{-- form masks --}}
{!! config('constant.resources.js.form_masks') !!}
{!! config('constant.resources.js.form_masks_init') !!}

{!! config('constant.resources.js.semar') !!}
@endsection
