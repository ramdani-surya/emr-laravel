@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.select2') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">{{ $formTitle }}</h4>
            <p class="sub-header"></p>

            <form class="parsley-examples">
                <div class="form-group clearfix">
                    <label class="control-label" for="foto">Foto</label>
                    <div>
                        <input type="file" id="foto" class="filestyle" data-text="Masukkan foto" name="foto">
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="nama_lengkap">Nama Lengkap <span
                            class="text-danger">*</span></label>
                    <div>
                        <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control"
                            parsley-trigger="change" required>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="jenis_kelamin">Jenis Kelamin<span
                            class="text-danger">*</span></label>
                    <div>
                        <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option disabled selected>-- Pilih jenis kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-row clearfix">
                    <div class="form-group col-md-4">
                        <label for="tempat_lahir" class="col-form-label control-label">Tempat,<span
                                class="text-danger">*</span></label>
                        <div>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                    </div>

                    <div class="form-group col-md-8">
                        <label for="tanggal_lahir" class="col-form-label control-label">Tanggal Lahir<span
                                class="text-danger">*</span></label>
                        <div>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="kecamatan">Kecamatan<span class="text-danger">*</span></label>
                    <div>
                        <input class="form-control" id="kecamatan" type="text" name="kecamatan" required>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="kota">Kota<span class="text-danger">*</span></label>
                    <div>
                        <input class="form-control" id="kota" type="text" name="kota" required>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="alamat_lengkap">Alamat Lengkap<span
                            class="text-danger">*</span></label>
                    <div>
                        <textarea class="form-control" name="alamat_lengkap" id="alamat_lengkap" rows="5"
                            required></textarea>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="telepon">Telepon<span class="text-danger">*</span></label>
                    <div>
                        <input class="form-control" id="telepon" type="text" data-parsley-type="number"
                            data-toggle="input-mask" data-mask-format="+(00) 000-0000-0000"
                            placeholder="+(62) 812-3456-7890" name="telepon" required>
                        <span class="font-13 text-muted">Masukkan dengan kode area.</span>
                    </div>
                </div>

                <div class="form-group clearfix">
                    <label class="control-label" for="agama">Agama<span class="text-danger">*</span></label>
                    <div>
                        <select class="required form-control select2" id="agama" name="agama" required>
                            <option disabled selected>-- Pilih agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Kong Hu Chu">Konghuchu</option>
                        </select>
                    </div>
                </div>

                <div class="form-group clearfix password-form">
                    <label class="control-label" for="password">Password <span class="text-danger">*</span></label>
                    <div>
                        <input id="password" name="password" type="text" class="form-control" required>
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
</div>
@endsection


@section('required_js')
<script>
    $(document).ready(function () {
        if ($('.header-title').text() === 'Tambah Dokter') {
            $('.password-form').after('<div class="form-group clearfix">'
                    + '<label class="control-label" for="poliklinik">Poliklinik<span class="text-danger">*</span></label>'
                    + '<div>'
                        + '<select class="form-control select2" id="poliklinik" name="poliklinik" required>'
                            + '<option disabled selected>-- Pilih poliklinik --</option>'
                            + '<option value="Umum">Umum</option>'
                            + '<option value="Gigi">Gigi</option>'
                            + '<option value="Penyakit Dalam">Penyakit Dalam</option>'
                            + '<option value="Anak">Anak</option>'
                            + '<option value="Kebidanan dan Kandungan">Kebidanan & Kandungan</option>'
                            + '<option value="Penyakit Syaraf">Penyakit Syaraf</option>'
                            + '<option value="Kulit dan Kelamin">Kulit dan Kelamin</option>'
                            + '<option value="Mata">Mata</option>'
                            + '<option value="Radiologi">Radiologi</option>'
                        + '</select>'
                    + '</div>'
                + '</div>');
        }
    });
</script>

{!! config('constant.resources.js.select2') !!}
{!! config('constant.resources.js.boostrap_filestyle') !!}
{!! config('constant.resources.js.form_advanced_init') !!}

{{-- form validation --}}
{!! config('constant.resources.js.parsley') !!}
{!! config('constant.resources.js.form_validation_init') !!}

{{-- form masks --}}
{!! config('constant.resources.js.form_masks') !!}
{!! config('constant.resources.js.form_masks_init') !!}

{!! config('constant.resources.js.semar') !!}
@endsection
