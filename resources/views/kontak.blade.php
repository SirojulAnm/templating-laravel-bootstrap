<!-- Menghubungkan dengan view template utama -->
@extends('template/base')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<p>Ini Adalah Halaman Kontak</p>

<table border="0">
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>aa@gmail.com</td>
    </tr>
    <tr>
        <td>Hp</td>
        <td>:</td>
        <td>0811111</td>
    </tr>
</table>

@endsection