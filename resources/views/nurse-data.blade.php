@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.datatable') !!}
{!! config('constant.resources.css.sweet_alert') !!}
@endsection

@section('content')
<div class="col-12">
    <div class="card-box table-responsive">
        <h4 class="header-title">Data Perawat</h4>

        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>
                        <a href="{{ route('doctors.create') }}"
                            class="btn btn-success waves-light waves-effect">Tambah</a>
                    </th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Kecamatan</th>
                    <th>Kota</th>
                    <th>Alamat Lengkap</th>
                    <th>Telepon</th>
                    <th>Agama</th>
                </tr>
            </thead>


            <tbody>
                <tr>
                    <td>1</td>
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
                    <td></td>
                    <td>Melina</td>
                    <td>Perempuan</td>
                    <td>Sumedang, 01 Januari 2000</td>
                    <td>Sumedang</td>
                    <td>Sumedang</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio odit, veniam sapiente voluptas ut
                        laudantium est repellat blanditiis et facere libero nesciunt beatae, suscipit voluptates cumque
                        sunt tempore veritatis rerum.</td>
                    <td>1234567890</td>
                    <td>Islam</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('required_js')
{!! config('constant.resources.js.datatable') !!}
{!! config('constant.resources.js.datatable_init') !!}
{!! config('constant.resources.js.sweet_alert') !!}
{!! config('constant.resources.js.semar') !!}
@endsection
