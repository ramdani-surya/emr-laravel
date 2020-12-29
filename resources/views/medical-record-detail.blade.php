@extends('layouts/master')

@section('required_css')
{!! config('constant.resources.css.boostrap_tagsinput') !!}
{!! config('constant.resources.css.sweet_alert') !!}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card-box task-detail">
            <div class="media mt-0 mb-4">
                <img class="d-flex mr-3 rounded-circle" alt="64x64" src="{{ asset('images/users/agung.jpg') }}"
                    style="width: 48px; height: 48px;">
                <div class="media-body">
                    <h5 class="media-heading mb-0 mt-0"><a href="#">Agung Sopian</a></h5>
                    <p class="font-13">20 Tahun</p>
                </div>

                <div class="button-list">
                    <button type="button" class="btn btn-icon waves-effect waves-light btn-warning"
                        data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"> <i
                            class="fas fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-icon waves-effect waves-light btn-danger sa-delete"
                        data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"> <i
                            class="fas fa-trash-alt"></i> </button>
                </div>
            </div>

            <h4>Diagnosis: Mata kering</h4>

            <div class="task-tags mt-3">
                <h5>Keluhan</h5>
                <input type="text" value="Mata merah,Mata terasa panas,Penglihatan buram" data-role="tagsinput"
                    disabled />
            </div>

            <ul class="list-inline task-dates mb-0 mt-4">
                <li>
                    <h5>Tanggal Tindakan</h5>
                    <p> 01 December 2020 <small class="text-muted">10.00</small></p>
                </li>
            </ul>
            <div class="clearfix"></div>

            <h5>Tindakan</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim dolores dignissimos odit velit debitis
                quod
                veritatis aperiam, labore recusandae ratione vero! Rem eius architecto distinctio, perspiciatis tempore
                facilis! Eaque.</p>

            <div class="attached-files mt-3">
                <h5>Dokumen</h5>
                <div class="files-list">
                    <div class="file-box">
                        <a href="#"><img src="{{ asset('images/attached-files/rontgen.jpg') }}"
                                class="img-responsive img-thumbnail" alt="attached-img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-lg-4">
        <div class="card-box">
            <h4 class="header-title mb-4">Penanggung Jawab</h4>
            <div>
                <div class="media mb-3">
                    <div class="d-flex mr-3">
                        <a href="#"> <img class="media-object rounded-circle avatar-sm" alt="64x64"
                                src="{{ asset('images/users/sugih.jpeg') }}"> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="mt-0">Sugih Sopian</h5>
                        <p class="font-13 text-muted mb-0">Dokter</p>
                    </div>
                </div>
                <div class="media mb-3">
                    <div class="d-flex mr-3">
                        <a href="#"> <img class="media-object rounded-circle avatar-sm" alt="64x64"
                                src="{{ asset('images/users/melina.jpg') }}"> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="mt-0">Melina Wida W.</h5>
                        <p class="font-13 text-muted mb-0">Perawat</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h4 class="header-title mb-4">Data Kesehatan Dasar</h4>
            <div>
                <div class="text-left">
                    <p class="text-muted font-13"><strong>Tinggi Badan :</strong> <span>170cm</span></p>
                    <p class="text-muted font-13"><strong>Berat Badan :</strong> <span>80kg</span></p>
                    <p class="text-muted font-13"><strong>Tekanan Darah :</strong> <span>90/60 mmHg</span></p>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h4 class="header-title mb-2">Resep</h4>
            <p class="sub-header"><a href="#">Ke detail resep.</a></p>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Obat</th>
                            <th>Dosis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ciclosporine</td>
                            <td>3x sehari</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>pilocarpine</td>
                            <td>3x sehari</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- end col -->
</div>
@endsection

@section('required_js')
{!! config('constant.resources.js.boostrap_tagsinput') !!}
{!! config('constant.resources.js.sweet_alert') !!}
{!! config('constant.resources.js.semar') !!}
@endsection
