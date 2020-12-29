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
        <h4 class="header-title">Data Resep</h4>

        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tanggal</th>
                    <th>Dokter</th>
                    <th>Pasien</th>
                    <th>Poli</th>
                    <th>Total Harga</th>
                    <th>
                        <button type="button" class="btn btn-success waves-light waves-effect">Tambah</button>
                    </th>
                </tr>
            </thead>


            <tbody>
                <tr>
                    <td>1</td>
                    <td>26-11-2020</td>
                    <td><a href="#">Ramdani</a></td>
                    <td><a href="medical-record-patient.html">Mark</a></td>
                    <td>Penyakit dalam</td>
                    <td>Rp50.000</td>
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
                    <td>26-11-2020</td>
                    <td><a href="#">Surya</a></td>
                    <td><a href="medical-record-patient.html">Jacob</a></td>
                    <td>Gigi</td>
                    <td>Rp50.000</td>
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
                    <td>26-11-2020</td>
                    <td><a href="#">Manggala</a></td>
                    <td><a href="medical-record-patient.html">Larry</a></td>
                    <td>Umum</td>
                    <td>Rp50.000</td>
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
