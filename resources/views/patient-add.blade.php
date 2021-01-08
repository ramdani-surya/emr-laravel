@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.select2') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">Tambah Pasien</h4>
            <p class="sub-header"></p>

            <form action="#" class="parsley-examples">
                @include('layouts/patient-data-form')

                <div class="form-group text-right mb-0">
                    <button type="button" class="btn btn-light btn-rounded waves-effect">Batal</button>
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
@endsection
