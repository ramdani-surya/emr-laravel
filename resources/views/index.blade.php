@extends('layouts/master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title mb-3">Ringkasan Bulanan</h4>

            <div class="row text-center">
                <div class="col-sm-6 col-xl-4">
                    <div class="card-box widget-flat border-primary bg-primary text-white">
                        <i class="fe-tag"></i>
                        <h3 class="text-white">25563</h3>
                        <p class="text-uppercase font-13 mb-2 font-weight-bold">Kunjungan</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="card-box bg-blue widget-flat border-blue text-white">
                        <i class="fe-life-buoy"></i>
                        <h3 class="text-white">6952</h3>
                        <p class="text-uppercase font-13 mb-2 font-weight-bold">Obat Terjual</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="card-box widget-flat border-success bg-success text-white">
                        <i class="fe-dollar-sign"></i>
                        <h3 class="text-white">Rp19.560.000</h3>
                        <p class="text-uppercase font-13 mb-2 font-weight-bold">Pendapatan</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">10 Penyakit Terbanyak Ditangani</h4>

                    <ul class="list-unstyled transaction-list slimscroll mb-0" style="max-height: 370px;">
                        <li>
                            <i class="fe-hash">1</i>
                            <span class="tran-text">Hipertensi</span>
                            <span class="float-right text-muted">23.000 kasus</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">2</i>
                            <span class="tran-text">Stroke</span>
                            <span class="float-right text-muted">9.650 kasus</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">3</i>
                            <span class="tran-text">Gagal jantung</span>
                            <span class="float-right text-muted">8.300 kasus</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">4</i>
                            <span class="tran-text">Diabetes</span>
                            <span class="float-right text-muted">2.300 kasus</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">5</i>
                            <span class="tran-text">TBC</span>
                            <span class="float-right text-muted">452 kasus</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">6</i>
                            <span class="tran-text">Demam berdarah</span>
                            <span class="float-right text-muted">400 kasus</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">7</i>
                            <span class="tran-text">Hepatitis A</span>
                            <span class="float-right text-muted">350 kasus</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">8</i>
                            <span class="tran-text">Hepatitis B</span>
                            <span class="float-right text-muted">300 kasus</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">9</i>
                            <span class="tran-text">HIV</span>
                            <span class="float-right text-muted">250 kasus</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">10</i>
                            <span class="tran-text">Malaria</span>
                            <span class="float-right text-muted">200 kasus</span>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">10 Obat Paling Laku</h4>

                    <ul class="list-unstyled transaction-list slimscroll mb-0" style="max-height: 370px;">
                        <li>
                            <i class="fe-hash">1</i>
                            <span class="tran-text">Acarbose</span>
                            <span class="float-right text-muted">23.000 lembar</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">2</i>
                            <span class="tran-text">Acetazolamide</span>
                            <span class="float-right text-muted">9.650 lembar</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">3</i>
                            <span class="tran-text">Acetylcysteine</span>
                            <span class="float-right text-muted">8.300 lembar</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">4</i>
                            <span class="tran-text">Actifed</span>
                            <span class="float-right text-muted">2.300 lembar</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">5</i>
                            <span class="tran-text">Adapalene</span>
                            <span class="float-right text-muted">452 lembar</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">6</i>
                            <span class="tran-text">Adefovir</span>
                            <span class="float-right text-muted">400 lembar</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">7</i>
                            <span class="tran-text">Albendazole</span>
                            <span class="float-right text-muted">350 lembar</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">8</i>
                            <span class="tran-text">Albumin</span>
                            <span class="float-right text-muted">300 lembar</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">9</i>
                            <span class="tran-text">Allopurinol</span>
                            <span class="float-right text-muted">250 lembar</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="fe-hash">10</i>
                            <span class="tran-text">Allylestrenol</span>
                            <span class="float-right text-muted">200 lembar</span>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
@endsection
