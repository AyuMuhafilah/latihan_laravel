<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    protected $table ='tbl_pegawai';
    
    // Kolom di mysql yang akan diisi data
    protected $fillable = array(
    'NoInduk',
    'NamaPegawai',
    'TempatLahir',
    'TanggalLahir',
    'JenisKelamin',
    'NoHandphone'
    );

    // Menonaktifkan tanggal pembuatan dan update
    public $timestamps = false;
    protected $primaryKey = 'NoInduk';
    public $incrementing = false;
    protected $keyType = 'string';
    
}