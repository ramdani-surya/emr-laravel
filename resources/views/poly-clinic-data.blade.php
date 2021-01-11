@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.datatable') !!}
{!! config('constant.resources.css.modal') !!}
{!! config('constant.resources.css.sweet_alert') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="header-title">Data Poliklinik</h4>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Poliklinik</th>
                        <th>Lokasi</th>
                        <th>
                            <a href="#custom-modal" class="btn btn-success waves-light waves-effect"
                                id="add-polyclinic-btn" data-animation="push" data-plugin="custommodal"
                                data-overlaySpeed="100" data-overlayColor="#36404a"
                                data-url="{{ route('polyclinic.store') }}">Tambah</a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php $number = 1 ?>
                    @foreach ($polyclinics as $polyclinic)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td id="{{ "name-$polyclinic->id" }}">{{ $polyclinic->polyclinic_name }}</td>
                        <td id="{{ "location-$polyclinic->id" }}">{{ $polyclinic->location }}</td>
                        <td>
                            <div class="button-list">
                                <button type="button"
                                    class="btn btn-icon waves-effect waves-light btn-warning edit-polyclinic-btn"
                                    data-toggle="modal" data-target="#myModal" data-id="{{ $polyclinic->id }}"
                                    data-url="{{ route('polyclinic.update', $polyclinic->id) }}"><i
                                        class="fas fa-pencil-alt"></i></button>

                                <form action="{{ route('polyclinic.destroy', $polyclinic->id) }}"
                                    onsubmit="return confirm('Apakah anda yakin?')" method="post"
                                    style="display: inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-icon waves-effect waves-light btn-danger">
                                        <i class="fas fa-trash-alt"></i> </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Tambah Poliklinik</h4>
    <div class="custom-modal-text">
        <form class="form-horizontal parsley-examples" action="{{ route('polyclinic.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="col-12">
                    <label for="poliklinik">Nama Poliklinik <span class="text-danger">*</span></label>
                    <input class="form-control" parsley-trigger="change" type="text" id="poliklinik"
                        name="polyclinic_name" value="{{ old('polyclinic_name') }}" required>
                </div>
                @error('polyclinic_name')
                <ul class="parsley-errors-list filled">
                    <li>{{ $message }}</li>
                </ul>
                @enderror
            </div>

            <div class="form-group">
                <div class="col-12">
                    <label for="lokasi">Lokasi <span class="text-danger">*</span></label>
                    <input class="form-control" parsley-trigger="change" type="text" name="location" id="lokasi"
                        value="{{ old('location') }}" required>
                </div>
                @error('location')
                <ul class="parsley-errors-list filled">
                    <li>{{ $message }}</li>
                </ul>
                @enderror
            </div>

            <div class="form-group account-btn text-center mt-2">
                <div class="col-12">
                    <button class="btn width-lg btn-rounded btn-primary waves-effect waves-light"
                        type="submit">Simpan</button>
                </div>
            </div>

        </form>
    </div>
</div>

<!-- Edit Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Poliklinik</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal parsley-examples" id="edit-form" action="#" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="col-12">
                            <label for="poliklinik">Nama Poliklinik <span class="text-danger">*</span></label>
                            <input class="form-control edit-poliklinik" parsley-trigger="change" type="text"
                                id="poliklinik" name="polyclinic_name" value="{{ old('polyclinic_name') }}" required>
                        </div>
                        @error('polyclinic_name')
                        <ul class="parsley-errors-list filled">
                            <li>{{ $message }}</li>
                        </ul>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <label for="lokasi">Lokasi <span class="text-danger">*</span></label>
                            <input class="form-control edit-lokasi" parsley-trigger="change" type="text" name="location"
                                id="lokasi" value="{{ old('location') }}" required>
                        </div>
                        @error('location')
                        <ul class="parsley-errors-list filled">
                            <li>{{ $message }}</li>
                        </ul>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-light waves-effect waves-light"
                            data-dismiss="modal">Batal</button>
                        <button type="submit"
                            class="btn btn-rounded btn-primary waves-effect waves-light">Simpan</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('required_js')
{!! config('constant.resources.js.datatable') !!}
{!! config('constant.resources.js.datatable_init') !!}
{!! config('constant.resources.js.modal') !!}
{!! config('constant.resources.js.sweet_alert') !!}
{!! config('constant.resources.js.parsley') !!}
{!! config('constant.resources.js.form_validation_init') !!}
{!! config('constant.resources.js.semar') !!}
@endsection
