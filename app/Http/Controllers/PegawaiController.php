<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PegawaiModel;
use App\UserModel;
// Facades Session untuk mengatur session
use Illuminate\Support\Facades\Session;
// Facades Session untuk mengatur redirect
use Illuminate\Support\Facades\Redirect;
class PegawaiController extends Controller
{

    public function __construct(Request $request){
        $this->middleware(function ($request, $next){
            if(Session::get('level') != NULL && Session::get('level')=='admin'){
                return $next($request);
            } else {
                // Jika Tidak Login
                Redirect::to('/')->send();
            }
        });
    }

    public function Home(){
        return view('Home');
    }
    public function CariPegawai(){
        return view('CariPegawai');
    }
    // Method Untuk Tampil pegawai
    public function TampilData(){
        // SELECT * FROM tbl_pegawai
        $pegawai=PegawaiModel::all();
        // Memanggil file TampilData pada resources/views
        return view('TampilPegawai',['dataPegawai'=>$pegawai]);
    }
    // Method Untuk Tambah Pegawai
    public function TambahData(){
        return view('TambahPegawai');
    }
    // Method Untuk Menyimpan Data
    public function SimpanData(Request $request){
        $NoInduk = $request->input('txtNoInduk');
        $NamaPegawai = $request->input('txtNamaLengkap');
        $radioJK = $request->input('radioJK');
        $NoHp = $request->input('txtNoHp');
        $TempatLahir = $request->input('txtTempatLahir');
        $TanggalLahir = $request->input('txtTanggalLahir');
        
       /* echo '<p> Pegawai dengan data '.$NoInduk.' '.$NamaLengkap.' '.$JK.' '.$NoHp.' Berhasil Disimpan!!! </p>'; */

        $dataPegawai = ['NoInduk'=>$NoInduk, 'NamaPegawai'=>$NamaPegawai,'JenisKelamin'=>$radioJK,
        'TempatLahir'=>$TempatLahir, 'TanggalLahir'=>$TanggalLahir, 'NoHandphone'=>$NoHp];

        // Perintah Insert Data
        PegawaiModel::create($dataPegawai);
        // Kembali ke tampilan pegawai
        return redirect()->action('PegawaiController@TampilData');
    }
    // Method Untuk Menghapus Data
    public function HapusData($nik){
        PegawaiModel::where('NoInduk', $nik)->delete();
        return redirect()->action('PegawaiController@TampilData');
    }

    // Method Untuk Mengedit Data
    public function EditData($nik){
        $pegawai = PegawaiModel::find($nik);
        return view('EditPegawai',['detailPegawai'=>$pegawai]);
    }
    public function UpdateData(Request $dataPegawai){
        $NoInduk = $dataPegawai->input('txtNoInduk');
        $NamaPegawai = $dataPegawai->input('txtNamaLengkap');
        $TempatLahir = $dataPegawai->input('txtTempatLahir');
        $TanggalLahir = $dataPegawai->input('txtTanggalLahir');
        $radioJK = $dataPegawai->input('radioJK');
        $NoHp = $dataPegawai->input('txtNoHp');
        
        $dataPegawai = ['NoInduk'=>$NoInduk, 'NamaPegawai'=>$NamaPegawai, 'TempatLahir'=>$TempatLahir,
        'TanggalLahir'=>$TanggalLahir, 'JenisKelamin'=>$radioJK, 'NoHandphone'=>$NoHp];
        PegawaiModel::where('NoInduk',$NoInduk)->update($dataPegawai);
        return redirect()->action('PegawaiController@TampilData');
    }
}
    