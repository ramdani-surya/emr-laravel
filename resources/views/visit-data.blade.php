@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.datatable') !!}
{!! config('constant.resources.css.sweet_alert') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title">Data Kunjungan</h4>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>
                            <a href="{{ route('visits.create') }}"
                                class="btn btn-success waves-light waves-effect">Tambah</a>
                        </th>
                        <th>Tanggal Kunjungan</th>
                        <th>Poli Tujuan</th>
                        <th>Nomor Registrasi</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Kecamatan</th>
                        <th>Kota</th>
                        <th>Alamat Lengkap</th>
                        <th>Telepon</th>
                        <th>Agama</th>
                        <th>Pekerjaan</th>
                        <th>Status Pernikahan</th>
                        <th>Penjamin</th>
                        <th>Nomor Anggota</th>
                        <th>Hak Kelas</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="button-list">
                                <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-warning"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i
                                        class="fas fa-pencil-alt"></i> </button>
                                <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-danger sa-delete"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                        class="fas fa-trash-alt"></i> </button>
                            </div>
                        </td>
                        <td>01 Januari 2020 | 10.10</td>
                        <td>Mata</td>
                        <td>M001</td>
                        <td>1234567890</td>
                        <td><a href="medical-record-patient.html">Avatar</a></td>
                        <td>Perempuan</td>
                        <td>Sumedang, 01 Januari 2000</td>
                        <td>Sumedang Selatan</td>
                        <td>Sumedang</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente molestias enim dolores,
                            ipsa accusantium vel odio quaerat et unde sit distinctio sequi atque minus impedit quam
                            voluptates provident quos voluptatibus.</td>
                        <td>0832476523</td>
                        <td>Islam</td>
                        <td>Progamer</td>
                        <td>Belum Menikah</td>
                        <td>BPJS</td>
                        <td>123456789</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <div class="button-list">
                                <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-warning"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i
                                        class="fas fa-pencil-alt"></i> </button>
                                <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-danger sa-delete"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                        class="fas fa-trash-alt"></i> </button>
                            </div>
                        </td>
                        <td>01 Januari 2020 | 10.10</td>
                        <td>Mata</td>
                        <td>M001</td>
                        <td>1234567892</td>
                        <td><a href="medical-record-patient.html">Jacob</a></td>
                        <td>Laki-laki</td>
                        <td>Sumedang, 01 Januari 2000</td>
                        <td>Sumedang Selatan</td>
                        <td>Sumedang</td>
                        <td>Sumedang</td>
                        <td>084763425</td>
                        <td>Islam</td>
                        <td>Progamer</td>
                        <td>Belum Menikah</td>
                        <td>BPJS</td>
                        <td>123456789</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <div class="button-list">
                                <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-warning"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i
                                        class="fas fa-pencil-alt"></i> </button>
                                <button type="button" class="btn btn-icon btn-sm waves-effect waves-light btn-danger sa-delete"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                        class="fas fa-trash-alt"></i> </button>
                            </div>
                        </td>
                        <td>01 Januari 2020 | 10.10</td>
                        <td>Mata</td>
                        <td>M001</td>
                        <td>1234567893</td>
                        <td><a href="medical-record-patient.html">Larry</a></td>
                        <td>Laki-laki</td>
                        <td>Sumedang, 01 Januari 2000</td>
                        <td>Sumedang Selatan</td>
                        <td>Sumedang</td>
                        <td>Sumedang</td>
                        <td>0832475347</td>
                        <td>Islam</td>
                        <td>Progamer</td>
                        <td>Belum Menikah</td>
                        <td>BPJS</td>
                        <td>123456789</td>
                        <td>1</td>
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
