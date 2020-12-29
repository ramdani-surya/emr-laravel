@extends('layouts/master')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <div class="timeline" dir="ltr">
                <article class="timeline-item alt">
                    <div class="text-right">
                        <div class="time-show first">
                            <a href="#" class="btn btn-primary width-lg">Desember 2020</a>
                        </div>
                    </div>
                </article>
                <article class="timeline-item alt">
                    <div class="timeline-desk">
                        <a href="{{ route('medical-records.show', 1) }}">
                            <div class="panel">
                                <div class="timeline-box">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon bg-primary"><i class="mdi mdi-adjust"></i></span>
                                    <h4 class="text-primary">01 Desember 2020</h4>
                                    <p class="timeline-date text-muted"><small>08:25</small></p>
                                    <p>Ablasi Retina</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </article>

                <article class="timeline-item alt">
                    <div class="text-right">
                        <div class="time-show">
                            <a href="#" class="btn btn-primary width-lg">Januari 2020</a>
                        </div>
                    </div>
                </article>
                <article class="timeline-item">
                    <div class="timeline-desk">
                        <div class="panel">
                            <a href="{{ route('medical-records.show', 1) }}">
                                <div class="timeline-box">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon bg-primary"><i class="mdi mdi-adjust"></i></span>
                                    <h4 class="text-primary">07 Januari 2020</h4>
                                    <p class="timeline-date text-muted"><small>08:25</small></p>
                                    <p>Mata Kering</p>

                                </div>
                            </a>
                        </div>
                    </div>
                </article>
                <article class="timeline-item alt">
                    <div class="timeline-desk">
                        <a href="{{ route('medical-records.show', 1) }}">
                            <div class="panel">
                                <div class="timeline-box">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon bg-primary"><i class="mdi mdi-adjust"></i></span>
                                    <h4 class="text-primary">01 Januari 2020</h4>
                                    <p class="timeline-date text-muted"><small>08:25</small></p>
                                    <p>Katarak</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </article>
            </div>
            <!-- end timeline -->
        </div>
    </div>
</div>
@endsection
