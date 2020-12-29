@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.select2') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">Tambah Dokter</h4>
            <p class="sub-header"></p>

            <form class="parsley-examples">
                @include('layouts/human-resources-form')

                <div class="form-group clearfix">
                    <label class="control-label" for="poliklinik">Poliklinik<span class="text-danger">*</span></label>
                    <div>
                        <select class="form-control select2" id="poliklinik" name="poliklinik" required>
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
                    <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Wajib
                        diisi.</label>
                </div>

                <div class="form-group clearfix">
                    <div class="button-list" style="float: right">
                        <button type="button" class="btn btn-light btn-rounded waves-effect">Batal</button>
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
