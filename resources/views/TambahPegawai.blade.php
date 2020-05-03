@extends('Master')

@section('judul_halaman','Tambah Data Pegawai')

@section('konten')

    <p>Isi Form berikut untuk menambah data </p>
    <form method="POST" action ="SimpanData">
        <p>Nomor Induk <br/>
        {{csrf_field()}}
        <input type = "text" name = "txtNoInduk" placeholder = "Masukkan Nomor Induk">
        </p>

        <p> Nama Lengkap <br/>
        <input type = "text" name = "txtNamaLengkap" placeholder = "Masukkan Nama Lengkap">
        </p>

        <p> Tempat, Tanggal Lahir </br>
        <input type = "text" name = "txtTempatLahir" placeholder = "Masukkan Tempat Lahir">
        <input type = "date" name = "txtTanggalLahir">
        </p>

        <p> Jenis Kelamin <br/>
        <input type = "radio" name = "radioJK" value = "L"/>Laki-Laki
        <input type = "radio" name = "radioJK" value = "P"/>Perempuan
        </p>
        
        <p> Nomor Handphone <br/>
        <input type = "text" name = "txtNoHp" placeholder = "Masukkan Nomor Handphone">
        </p>

        <p>
        <button type = "submit" name = "btnSimpan">Simpan</button>
        </p>
        </form>
@endsection