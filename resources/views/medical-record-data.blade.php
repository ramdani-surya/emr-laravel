@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.datatable') !!}
{!! config('constant.resources.css.sweet_alert') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title">Data Rekam Medis</h4>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Poli</th>
                        <th>Pasien</th>
                        <th>Diagnosa Terakhir</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mata</td>
                        <td><a href="{{ route('patients.show', 1) }}">Avatar</a></td>
                        <td>Ablasi Retina</td>
                        <td>01-01-2020</td>
                        <td>
                            <div class="button-list">
                                <a href="{{ route('medical-records.history', 1) }}"
                                    class="btn btn-icon waves-effect waves-light btn-info" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Detail"> <i
                                        class="fas fa-info-circle"></i>
                                </a>
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-danger sa-delete"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                        class="fas fa-trash-alt"></i> </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Gigi</td>
                        <td><a href="{{ route('patients.show', 1) }}">Jacob</a></td>
                        <td>Abses Gigi</td>
                        <td>01-01-2020</td>
                        <td>
                            <div class="button-list">
                                <a href="{{ route('medical-records.history', 1) }}"
                                    class="btn btn-icon waves-effect waves-light btn-info" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Detail"> <i
                                        class="fas fa-info-circle"></i>
                                </a>
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-danger sa-delete"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                        class="fas fa-trash-alt"></i> </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Umum</td>
                        <td><a href="{{ route('patients.show', 1) }}">Larry</a></td>
                        <td>Alergi</td>
                        <td>01-01-2020</td>
                        <td>
                            <div class="button-list">
                                <a href="{{ route('medical-records.history', 1) }}"
                                    class="btn btn-icon waves-effect waves-light btn-info" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Detail"> <i
                                        class="fas fa-info-circle"></i>
                                </a>
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-danger sa-delete"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                        class="fas fa-trash-alt"></i> </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('required_js')
{!! config('constant.resources.js.datatable') !!}
{!! config('constant.resources.js.datatable_init') !!}
{!! config('constant.resources.js.sweet_alert') !!}
{!! config('constant.resources.js.semar') !!}
@endsection
