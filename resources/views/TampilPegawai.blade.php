
@extends('Master')

@section('judul_halaman','Data Pegawai')

@section('konten')

    <p>Berikut ini data pegawai data pegawai yang terdaftar dalam database</p>
    <table border="2" width="100%">
    <thead>
    <tr>
            <th>No.</th>
            <th>No. Induk</th>
            <th>Nama Pegawai</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>NoHp</th>
            <th>Aksi</th>
            </tr>
    </thead>
    <tbody align = "center">
        @foreach($dataPegawai as $row)
        <tr>
        <td align="center">{{ $loop->iteration }}</td>
        <td>{{$row->NoInduk}}</td>
        <td>{{$row->NamaPegawai}}</td>
        <td>{{$row->TempatLahir}}, {{$row->TanggalLahir}}</td>
        <td>@if($row->JenisKelamin=='L')Laki-Laki
                @else
                        Perempuan
                @endif
        </td>
        <td>{{$row->NoHandphone}}</td>
        <td align="center">
                <a href = "/EditData/{{$row->NoInduk}}">Edit Pegawai</a>
                <a href = "/HapusData/{{$row->NoInduk}}">Hapus Pegawai</a>
        </td>
        </tr>
@endforeach

    </tbody>
    </table>

    @endsection     