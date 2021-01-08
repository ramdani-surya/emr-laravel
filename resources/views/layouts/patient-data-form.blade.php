<div class="form-group clearfix">
    <label class="control-label" for="autocomplete-ajax-x">NIK <span class="text-danger">*</span></label>
    <div>
        <input type="text" data-parsley-type="number" name="nik" id="autocomplete-ajax" class="form-control" required>
        <input type="text" name="nik" id="autocomplete-ajax-x" disabled="disabled" class="form-control"
            style="color: #CCC; position: absolute; background: transparent; z-index: 1;display: none;" />
    </div>
</div>

<div class="form-group clearfix">
    <label class="control-label" for="name">Nama Lengkap<span class="text-danger">*</span></label>
    <div>
        <input id="name" name="nama_lengkap" type="text" class="form-control" required>
    </div>
</div>

<div class="form-group clearfix">
    <label class="control-label" for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
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
        <label for="tempat_lahir" class="col-form-label control-label">Tempat,<span class="text-danger">*</span></label>
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
    <label class="control-label" for="golongan darah">Golongan Darah<span class="text-danger">*</span></label>
    <div>
        <select class="required form-control select2" id="golongan darah" name="golongan darah" required>
            <option disabled selected>-- Pilih golongan darah --</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select>
    </div>
</div>

<div class="form-group clearfix">
    <label class="control-label" for="alamat">Alamat<span class="text-danger">*</span></label>
    <div>
        <textarea class="form-control" name="alamat" id="alamat" rows="5" required></textarea>
    </div>
</div>

<div class="form-group clearfix">
    <label class="control-label" for="nomor_telepon">Nomor Telepon<span class="text-danger">*</span></label>
    <div>
        <input class="form-control" id="nomor_telepon" type="text" data-parsley-type="number" data-toggle="input-mask"
            data-mask-format="+(00) 000-0000-0000" placeholder="+(62) 812-3456-7890" name="nomor_telepon" required>
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

<div class="form-group clearfix">
    <label class="control-label" for="pekerjaan">Pekerjaan<span class="text-danger">*</span></label>
    <div>
        <input class="form-control" id="pekerjaan" type="text" name="pekerjaan" required>
    </div>
</div>

<div class="form-group clearfix">
    <label class="control-label" for="status_pernikahan">Status Pernikahan<span class="text-danger">*</span></label>
    <div>
        <select class="form-control select2" id="status_pernikahan" name="status_pernikahan" required>
            <option disabled selected>-- Pilih status pernikahan --</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
        </select>
    </div>
</div>

<div class="form-group clearfix">
    <label class="col-lg-12 control-label ">(<span class="text-danger">*</span>) Wajib
        diisi.</label>
</div>
