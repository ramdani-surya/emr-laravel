@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.datatable') !!}
{!! config('constant.resources.css.sweet_alert') !!}
{!! config('constant.resources.css.x_editable') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title">Data Antrean</h4>

            <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Tinggi Badan</th>
                        <th>Berat Badan</th>
                        <th>Tekanan Darah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="{{ route('patients.show', 1) }}">Avatar</a></td>
                        <td>Perempuan</td>
                        <td>20 tahun</td>
                        <td>
                            <a href="#" class="x-editable-form" data-type="number" data-pk="1"></a>
                        </td>
                        <td>
                            <a href="#" class="x-editable-form" data-type="number" data-pk="1"></a>
                        </td>
                        <td>
                            <a href="#" class="x-editable-form" data-type="text" data-pk="1"></a>
                        </td>
                        <td>
                            <div class="button-list">
                                <a href="{{ route('medical-records.create') }}"
                                    class="btn btn-icon waves-effect waves-light btn-success" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Periksa"> <i
                                        class="fas fa-check"></i> </a>
                                <button type="button"
                                    class="btn btn-icon waves-effect waves-light btn-warning sa-reorder-queue sa-reorder-queue"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Tunda"> <i
                                        class="fas fa-angle-double-down"></i> </button>
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-danger sa-delete"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                        class="fas fa-trash-alt"></i> </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="{{ route('patients.show', 1) }}">Jacob</a></td>
                        <td>Laki-laki</td>
                        <td>20 tahun</td>
                        <td>
                            <a href="#" class="x-editable-form" data-type="number" data-pk="1"></a>
                        </td>
                        <td>
                            <a href="#" class="x-editable-form" data-type="number" data-pk="1"></a>
                        </td>
                        <td>
                            <a href="#" class="x-editable-form" data-type="text" data-pk="1"></a>
                        </td>
                        <td>
                            <div class="button-list">
                                <a href="{{ route('medical-records.create') }}"
                                    class="btn btn-icon waves-effect waves-light btn-success" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Periksa"> <i
                                        class="fas fa-check"></i> </a>
                                <button type="button"
                                    class="btn btn-icon waves-effect waves-light btn-warning sa-reorder-queue"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Tunda"> <i
                                        class="fas fa-angle-double-down"></i> </button>
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-danger sa-delete"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                        class="fas fa-trash-alt"></i> </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="{{ route('patients.show', 1) }}">Larry</a></td>
                        <td>Laki-laki</td>
                        <td>20 tahun</td>
                        <td>
                            <a href="#" class="x-editable-form" data-type="number" data-pk="1"></a>
                        </td>
                        <td>
                            <a href="#" class="x-editable-form" data-type="number" data-pk="1"></a>
                        </td>
                        <td>
                            <a href="#" class="x-editable-form" data-type="text" data-pk="1"></a>
                        </td>
                        <td>
                            <div class="button-list">
                                <a href="{{ route('medical-records.create') }}"
                                    class="btn btn-icon waves-effect waves-light btn-success" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Periksa"> <i
                                        class="fas fa-check"></i> </a>
                                <button type="button"
                                    class="btn btn-icon waves-effect waves-light btn-warning sa-reorder-queue"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Tunda"> <i
                                        class="fas fa-angle-double-down"></i> </button>
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
{!! config('constant.resources.js.x_editable') !!}
{!! config('constant.resources.js.x_editable_init') !!}
{!! config('constant.resources.js.semar') !!}
@endsection
