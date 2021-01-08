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
                            <a href="#custom-modal" class="btn btn-success waves-light waves-effect"
                                data-animation="push" data-plugin="custommodal" data-overlaySpeed="100"
                                data-overlayColor="#36404a">Tambah</a>
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
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-danger sa-delete"
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
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-danger sa-delete"
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

<!-- Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Tambah Obat</h4>
    <div class="custom-modal-text">
        <form class="form-horizontal parsley-examples" action="#">

            <div class="form-group">
                <div class="col-12">
                    <label for="drug_name">Nama Obat <span class="text-danger">*</span></label>
                    <input class="form-control" parsley-trigger="change" type="text" id="drug_name" name="drug_name"
                        required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-12">
                    <label for="golongan">Golongan <span class="text-danger">*</span></label>
                    <input class="form-control" parsley-trigger="change" type="text" name="golongan" id="golongan"
                        required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-12">
                    <label for="harga">Harga <span class="text-danger">*</span></label>
                    <input class="form-control autonumber" data-parsley-type="number" type="text" name="harga"
                        id="harga" data-a-sign="Rp" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-12">
                    <label for="stok">Stok <span class="text-danger">*</span></label>
                    <input class="form-control autonumber" data-parsley-type="number" type="text" name="stok" id="stok"
                        data-a-sep="." data-a-dec="," required>
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
{!! config('constant.resources.js.form_masks') !!}
{!! config('constant.resources.js.form_masks_init') !!}
{!! config('constant.resources.js.semar') !!}
@endsection
