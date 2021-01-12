<?php

use Illuminate\Support\Facades\Storage;

function tgl_indo($datetime, $withDay = false, $withTime = false)
{
    $hari = ($withDay === true) ? config('constant.hari') : null;

    if ($hari !== null) {
        $day = date('D', strtotime($datetime));
        $stringDay = $hari[$day].', ';
    } else {
        $stringDay = null;
    }

    $bulan    = config('constant.bulan');
    $tanggal  = date('d m Y', strtotime($datetime));
    $pecahkan = explode(' ', $tanggal);

    $stringDate = $pecahkan[0] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[2];

    $time = ($withTime !== false) ? ' - '.date('H:i', strtotime($datetime)) : null ;

    return $stringDay.$stringDate.$time;
}

function profile_picture($path)
{
    $path = ($path) ? Storage::url($path) : asset('images/account_circle.png');

    return '<div class="thumb-lg member-thumb mx-auto">
                <img src="'. $path .'" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">
            </div>';
}
