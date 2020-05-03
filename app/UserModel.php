<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    // Tabel yang akan diisi data
    protected $table='tbl_pengguna';

    // Mendefinisikan primary key
    protected $primaryKey='username';
    // kolom di Mysql yang akan diisi data

    // Mengaktifkan CountData
    protected $withCount;

    // Membuka field yang boleh diisi data
    protected $fillable=array(
        'NoInduk',
        'username',
        'password',
        'level_user'
    );
    
    // Menonaktifkan tanggal pembuatan dan update
    public $timestamps = false;
}
