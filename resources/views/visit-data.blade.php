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
                    @php $number = 1 @endphp
                    @foreach ($visits as $visit)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td>
                            <div class="button-list">
                                <a href="{{ route('visits.edit', $visit->id) }}" class="btn btn-icon btn-sm waves-effect waves-light btn-warning"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i
                                        class="fas fa-pencil-alt"></i> </a>
                                <a href="{{ route('visits.destroy', $visit->id) }}"
                                    class="btn btn-icon btn-sm waves-effect waves-light btn-danger sa-delete"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                                        class="fas fa-trash-alt"></i> </a>
                            </div>
                        </td>
                        <td>{{ tgl_indo($visit->created_at, true, true) }}</td>
                        <td>{{ $visit->polyclinic->polyclinic_name }}</td>
                        <td>{{ $visit->registration_number }}</td>
                        <td>{{ $visit->patient->nik }}</td>
                        <td><a href="{{ route('patients.show', $visit->patient_id) }}">{{ $visit->patient->name }}</a></td>
                        <td>{{ $visit->patient->gender }}</td>
                        <td>{{ $visit->patient->birthplace.', '.tgl_indo($visit->patient->birthdate) }}</td>
                        <td>{{ $visit->patient->complete_address }}</td>
                        <td>{{ $visit->patient->phone }}</td>
                        <td>{{ $visit->patient->religion }}</td>
                        <td>{{ $visit->patient->profession }}</td>
                        <td>{{ $visit->patient->marital_status }}</td>
                        <td>{{ $visit->guarantator }}</td>
                        <td>{{ $visit->member_number }}</td>
                        <td>{{ $visit->access_rights }}</td>
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
