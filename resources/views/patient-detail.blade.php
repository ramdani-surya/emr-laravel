@extends('layouts/master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-sm-12">
                <!-- meta -->
                <div class="profile-user-box card-box bg-primary">
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="float-left mr-2"><img src="{{ asset('images/users/agung.jpg') }}" alt=""
                                    class="avatar-xl rounded-circle"></span>
                            <div class="media-body text-white">
                                <h4 class="mt-1 mb-1 text-white font-18">Agung Sopian</h4>
                                <p class="font-13">20 Tahun</p>
                                <p class="mb-0">Sumedang</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-4">
                <!-- Personal-Information -->
                <div class="card-box">
                    <h4 class="header-title">Data Diri</h4>
                    <div class="panel-body">
                        <hr />

                        <div class="text-left">
                            <p class="text-muted font-13"><strong>NIK :</strong> <span>1234567890</span></p>
                            <p class="text-muted font-13"><strong>Nama :</strong> <span>Agung Sopian</span></p>
                            <p class="text-muted font-13"><strong>Jenis Kelamin :</strong> <span>Laki-laki</span></p>
                            <p class="text-muted font-13"><strong>Tanggal Lahir :</strong> <span>Sumedang,
                                    01-01-2000</span>
                            </p>
                            <p class="text-muted font-13"><strong>Alamat :</strong> <span>Sumedang</span></p>
                            <p class="text-muted font-13"><strong>Desa/Kelurahan :</strong> <span>Maju Jaya</span></p>
                            <p class="text-muted font-13"><strong>Kecamatan :</strong> <span>Sumedang</span></p>
                            <p class="text-muted font-13"><strong>Telepon :</strong> <span>1234567890</span></p>
                            <p class="text-muted font-13"><strong>Agama :</strong> <span>-</span></p>
                            <p class="text-muted font-13"><strong>Pekerjaan :</strong> <span>Freelancer</span></p>
                            <p class="text-muted font-13"><strong>Status Pernikahan :</strong> <span>Belum
                                    Menikah</span></p>
                        </div>
                    </div>
                </div>
                <!-- Personal-Information -->
            </div>


            <div class="col-xl-8">

                <div class="card-box">
                    <h4 class="header-title mb-3">Rekam Medis</h4>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Poli</th>
                                    <th>Diagnosa Terakhir</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Umum</td>
                                    <td>Alergi</td>
                                    <td>01-01-2020</td>
                                    <td>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-icon waves-effect waves-light btn-info"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Detail"> <i class="fas fa-info-circle"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon waves-effect waves-light btn-danger"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Hapus">
                                                <i class="fas fa-trash-alt"></i> </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Gigi</td>
                                    <td>Abses Gigi</td>
                                    <td>02-02-2020</td>
                                    <td>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-icon waves-effect waves-light btn-info"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Detail"> <i class="fas fa-info-circle"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon waves-effect waves-light btn-danger"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Hapus">
                                                <i class="fas fa-trash-alt"></i> </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mata</td>
                                    <td>Mata Kering</td>
                                    <td>03-03-2020</td>
                                    <td>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-icon waves-effect waves-light btn-info"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Detail"> <i class="fas fa-info-circle"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon waves-effect waves-light btn-danger"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Hapus">
                                                <i class="fas fa-trash-alt"></i> </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
</div>
@endsection
