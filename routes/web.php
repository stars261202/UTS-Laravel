<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('produk', function () {
    $kode = [2002, 1003, 5003, 3300, 7002];
    $nama = ['Pena', 'Buku', 'Penggaris', 'Penghapus', 'Pensil'];
    $jenis = count($kode);
    $harga = ['5.000', '10.000', '8.000', '6.000', '5.000'];
    return view('produk', compact('kode', 'nama', 'jenis', 'harga'));
});
