@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.datatable') !!}
{!! config('constant.resources.css.sweet_alert') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title">Data Dokter</h4>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>
                            <a href="{{ route('doctors.create') }}"
                                class="btn btn-success waves-light waves-effect">Tambah</a>
                        </th>
                        <th>Poliklinik</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Alamat Lengkap</th>
                        <th>Telepon</th>
                        <th>Agama</th>
                    </tr>
                </thead>


                <tbody>
                    @php $number = 1 @endphp
                    @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td>
                            <div class="button-list">
                                <a href="{{ route('doctors.edit', $doctor->id) }}"
                                    class="btn btn-icon waves-effect waves-light btn-warning" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Edit"> <i
                                        class="fas fa-pencil-alt"></i> </a>

                                <form action="{{ route('doctors.destroy', $doctor->id) }}" method="post"
                                    style="display: inline" onsubmit="return confirm('Apakah anda yakin?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-icon waves-effect waves-light btn-danger"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td>{{ $doctor->polyclinic->polyclinic_name }}</td>
                        <td>{!! profile_picture($doctor->photo) !!}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->gender }}</td>
                        <td>{{ $doctor->birthplace.", ".tgl_indo($doctor->birthdate) }}</td>
                        <td>{{ $doctor->address }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->religion }}</td>
                    </tr>
                    @endforeach
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
