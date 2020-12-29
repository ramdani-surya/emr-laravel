@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.datatable') !!}
{!! config('constant.resources.css.sweet_alert') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title">Data Pasien</h4>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>
                            <a href="{{ route('patients.create') }}"
                                class="btn btn-success waves-light waves-effect">Tambah</a>
                        </th>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1234567890</td>
                        <td><a href="{{ route('patients.show', 1) }}">Avatar</a></td>
                        <td>Perempuan</td>
                        <td>01-01-1900</td>
                        <td>Sumedang</td>
                        <td>0832476523</td>
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
                    <tr>
                        <td>2</td>
                        <td>1234567892</td>
                        <td><a href="{{ route('patients.show', 1) }}">Jacob</a></td>
                        <td>Laki-laki</td>
                        <td>01-01-1900</td>
                        <td>Sumedang</td>
                        <td>084763425</td>
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
                    <tr>
                        <td>3</td>
                        <td>1234567893</td>
                        <td><a href="{{ route('patients.show', 1) }}">Larry</a></td>
                        <td>Laki-laki</td>
                        <td>01-01-1900</td>
                        <td>Sumedang</td>
                        <td>0832475347</td>
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
