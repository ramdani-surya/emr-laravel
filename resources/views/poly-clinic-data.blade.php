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
                                data-animation="push" data-plugin="custommodal" data-overlaySpeed="100"
                                data-overlayColor="#36404a">Tambah</a>
                        </th>
                    </tr>
                </thead>


                <tbody>
                    <?php $number = 1 ?>
                    @foreach ($polyclinics as $polyclinic)
                    <tr>
                        <td>{{ $number++ }}</td>
                        <td>{{ $polyclinic->polyclinic_name }}</td>
                        <td>{{ $polyclinic->location }}</td>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Tambah Poliklinik</h4>
    <div class="custom-modal-text">
        <form class="form-horizontal parsley-examples" action="#">

            <div class="form-group">
                <div class="col-12">
                    <label for="poliklinik">Nama Poliklinik <span class="text-danger">*</span></label>
                    <input class="form-control" parsley-trigger="change" type="text" id="poliklinik" name="poliklinik"
                        required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-12">
                    <label for="lokasi">Lokasi <span class="text-danger">*</span></label>
                    <input class="form-control" parsley-trigger="change" type="text" name="lokasi" id="lokasi" required>
                </div>
            </div>

            <div class="form-group account-btn text-center mt-2">
                <div class="col-12">
                    <button class="btn width-lg btn-rounded btn-primary waves-effect waves-light"
                        type="submit">Tambahkan</button>
                </div>
            </div>

        </form>
    </div>
</div>
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
