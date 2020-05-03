@extends('Master')

@section('judul_halaman','Edit Data Pegawai')

@section('konten')
<p> Berikut ini data pegawai yang terdaftar dalam database</p>
<form method="POST" action="/UpdateData">
        <p>Nomor Induk <br/>
            {{csrf_field()}}
            <input type = "text" name = "txtNoInduk" value="{{$detailPegawai->NoInduk}}" readonly"/>
        </p>

        <p> Nama Lengkap <br/>
        <input type = "text" name = "txtNamaLengkap"  value="{{$detailPegawai->NamaPegawai}}" />
        </p>

        <p> Tempat, Tanggal Lahir </br>
        <input type = "text" name = "txtTempatLahir" value="{{$detailPegawai->TempatLahir}}"">
        <input type = "date" name = "txtTanggalLahir" value="{{$detailPegawai->TanggalLahir}}">
        </p>

        <p> Jenis Kelamin <br/>
        @if($detailPegawai->JenisKelamin=='L')
            @php
            $laki='checked';
            $perempuan=null;
            @endphp
        @else
        @php
            $perempuan='checked';
            $laki=null;
            @endphp
    @endif
<input type = "radio" name = "radioJK" value = "L"{{$laki}}/> Laki Laki
<input type = "radio" name = "radioJK" value = "P"{{$perempuan}}/> Perempuan

        </p>
        
        <p> Nomor Handphone <br/>
        <input type = "text" name = "txtNoHp" value="{{$detailPegawai->NoHandphone}}">
        </p>

        <p>
        <button type = "submit" name = "btnSimpan">Update</button>
        </p>
    </form>
@endsection