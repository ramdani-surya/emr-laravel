@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.datatable') !!}
{!! config('constant.resources.css.sweet_alert') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title">Data Resep</h4>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kunjungan</th>
                        <th>Poli</th>
                        <th>Pasien</th>
                        <th>Dokter</th>
                        <th>Obat</th>
                        <th>
                            <a href="{{ route('prescriptions.create') }}"
                                class="btn btn-success waves-light waves-effect">Tambah</a>
                        </th>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <td>1</td>
                        <td>01 Januari 2020</td>
                        <td>Umum</td>
                        <td><a href="#">Agung</a></td>
                        <td>Sopian</td>
                        <td>
                            <ul>
                                <li>ciclosporine</li>
                                <li>pilocarpine</li>
                            </ul>
                        </td>
                        <td>
                            <div class="button-list">
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-warning"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i
                                        class="fas fa-pencil-alt"></i> </button>
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
