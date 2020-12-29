@extends('layouts/master')

@section('required_css')
<link href="{{ asset('libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="col-12">
    <div class="card-box table-responsive">
        <h4 class="header-title">Data Obat</h4>

        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Obat</th>
                    <th>Golongan</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>
                        <button type="button" class="btn btn-success waves-light waves-effect">Tambah</button>
                    </th>
                </tr>
            </thead>


            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">Paracetamol</a></td>
                    <td>Obat Bebas</td>
                    <td>Rp5.000</td>
                    <td>200</td>
                    <td>
                        <div class="button-list">
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-warning"
                                data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i
                                    class="fas fa-pencil-alt"></i> </button>
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-danger"
                                data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                    class="fas fa-trash-alt"></i> </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="#">Teofilin</a></td>
                    <td>Obat Bebas Terbatas</td>
                    <td>Rp5.000</td>
                    <td>200</td>
                    <td>
                        <div class="button-list">
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-warning"
                                data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i
                                    class="fas fa-pencil-alt"></i> </button>
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-danger"
                                data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                    class="fas fa-trash-alt"></i> </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="#">Asam Mefenamat</a></td>
                    <td>Obat Keras</td>
                    <td>Rp5.000</td>
                    <td>200</td>
                    <td>
                        <div class="button-list">
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-warning"
                                data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i
                                    class="fas fa-pencil-alt"></i> </button>
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-danger"
                                data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                    class="fas fa-trash-alt"></i> </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('required_js')
<!-- Required datatable js -->
<script src="{{ asset('libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('libs/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Buttons examples -->
<script src="{{ asset('libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('libs/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('libs/datatables/buttons.print.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('libs/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatables init -->
<script src="{{ asset('js/pages/datatables.init.js') }}"></script>
@endsection
