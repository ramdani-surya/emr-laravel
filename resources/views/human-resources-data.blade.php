@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.datatable') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title">{{ $dataTitle }}</h4>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>
                            <a href="{{ $createUrl }}" class="btn btn-success waves-light waves-effect">Tambah</a>
                        </th>
                        @if ($subtitle === 'Dokter')
                        <th>Poliklinik</th>
                        @endif
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
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td>
                            <div class="button-list">
                                <a href="{{ $editUrl.'/'.$user->id }}"
                                    class="btn btn-icon waves-effect waves-light btn-warning" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Edit"> <i
                                        class="fas fa-pencil-alt"></i> </a>

                                <form action="{{ $deleteUrl.'/'.$user->id }}" method="post" style="display: inline"
                                    onsubmit="return confirm('Apakah anda yakin?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-icon waves-effect waves-light btn-danger"
                                        data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                        @if ($subtitle === 'Dokter')
                        <td>{{ $user->polyclinic->polyclinic_name }}</td>
                        @endif
                        <td>
                            <div class="thumb-lg member-thumb mx-auto">
                                <img src="{{ profile_picture($user->photo) }}" class="rounded-circle avatar-xl img-thumbnail"
                                    alt="profile-image">
                            </div>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->birthplace.", ".tgl_indo($user->birthdate) }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->religion }}</td>
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
{!! config('constant.resources.js.semar') !!}
@endsection
