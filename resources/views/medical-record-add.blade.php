@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.boostrap_tagsinput') !!}
{!! config('constant.resources.css.footable') !!}
{!! config('constant.resources.css.x_editable') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card-box">
            <h4 class="header-title">Tambah Rekam Medis</h4>
            <hr>

            <form class="parsley-examples">
                <div class="form-group clearfix">
                    <label class="control-label" for="autocomplete-ajax-x">Pasien <span
                            class="text-danger">*</span></label>
                    <div>
                        <input type="text" name="nik" id="autocomplete-ajax" class="form-control"
                            parsley-trigger="change" required>
                        <input type="text" name="nik" id="autocomplete-ajax-x" disabled="disabled" class="form-control"
                            style="color: #CCC; position: absolute; background: transparent; z-index: 1;display: none;" />
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="control-label" for="anamnesa">Anamnesa <span class="text-danger">*</span></label>
                    <div>
                        <select multiple data-role="tagsinput" id="anamnesa" name="anamnesa" parsley-trigger="change"
                            required></select>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="control-label" for="diagnosis">Diagnosis <span class="text-danger">*</span></label>
                    <div>
                        <input id="diagnosis" name="diagnosis" type="text" class="form-control" parsley-trigger="change"
                            required>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="control-label" for="diagnosis">Tindakan <span class="text-danger">*</span></label>
                    <div>
                        <textarea id="diagnosis" name="diagnosis" class="form-control" maxlength="500" rows="3"
                            required></textarea>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="control-label" for="dokumen">Dokumen</label>
                    <div>
                        <input type="file" class="filestyle" data-text="Masukkan file" multiple>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Wajib
                        diisi.</label>
                </div>
                <div class="form-group clearfix">
                    <div class="button-list" style="float: right">
                        <button type="button" class="btn btn-light btn-rounded waves-effect">Batal</button>
                        <button type="submit"
                            class="btn btn-primary btn-rounded waves-light waves-effect">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12 card-box">
                <h4 class="header-title">Kesehatan Dasar</h4>
                <hr>
                <div class="form-group clearfix">
                    <label for="tinggi_badan" class="col-form-label control-label">Tinggi Badan</label>
                    <div>
                        <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="berat_badan" class="col-form-label control-label">Berat Badan</label>
                    <div>
                        <input type="text" class="form-control" id="berat_badan" name="berat_badan">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="tekanan_darah" class="col-form-label control-label">Tekanan Darah</label>
                    <div>
                        <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah">
                    </div>
                </div>
            </div>
            <div class="col-md-12 card-box">
                <h4 class="header-title">Resep Obat</h4>
                <hr>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12 text-sm-center form-inline">
                            <div class="form-group mr-2">
                                <button id="demo-btn-addrow" class="btn btn-primary"><i
                                        class="mdi mdi-plus-circle mr-2"></i> Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table id="medical-prescription-form" class="table table-striped table-bordered mb-0 toggle-circle"
                    data-page-size="7">
                    <thead>
                        <tr>
                            <th data-sort-ignore="true" class="min-width"></th>
                            <th data-sort-initial="true" data-toggle="true">Obat</th>
                            <th>Dosis</th>
                            <th>Pemakaian per Hari</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                        <tr class="active">
                            <td colspan="6">
                                <div class="text-right">
                                    <ul class="pagination pagination-split justify-content-end footable-pagination">
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('required_js')
{!! config('constant.resources.js.boostrap_tagsinput') !!}
{!! config('constant.resources.js.jquery_mockjax') !!}
{!! config('constant.resources.js.jquery_autocomplete') !!}
{!! config('constant.resources.js.boostrap_maxlength') !!}
{!! config('constant.resources.js.boostrap_filestyle') !!}
{!! config('constant.resources.js.form_advanced_init') !!}

{{-- foo table --}}
{!! config('constant.resources.js.footable') !!}

{{-- x editable --}}
{!! config('constant.resources.js.x_editable') !!}

{{-- form validation --}}
{!! config('constant.resources.js.parsley') !!}
{!! config('constant.resources.js.form_validation_init') !!}

{{-- form masks --}}
{!! config('constant.resources.js.form_masks') !!}
{!! config('constant.resources.js.form_masks_init') !!}

{!! config('constant.resources.js.semar') !!}
@endsection
