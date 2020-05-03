<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\UserModel;

class UserController extends Controller
{
    public function LoginPage(){
        return view('User/LoginPage');
    }

    public function CekLoginUser(Request $dataUser){
        $this->validate($dataUser,
        ['txtUser'=>'required','txtPass'=>'required']);

        $username=$dataUser->input('txtUser');
        $password=$dataUser->input('txtPass');

        $user = UserModel::find ($username);
        if($user==null){
            return redirect('/GagalLogin')->with('failed', 'Login Gagal');
        }
        if($User->username == $username AND Hash::check($password, $User->password)){
                Session::put('level', $User->level_user);
                // Jika yang login Admin
                if(Session::get('level')=='admin'){
                    return redirect ('/Home');
                }
        } else {
            return redirect('/GagalLogin')->with('failed','Login Gagal');
        }
    }

    public function BuatUserAdmin(){
        $dataUser=['NoInduk'=>'19001','username'=>'admin@mail.com','password'=>Hash::make('123'),'level_user'=>'admin'];
        USerModel::create($dataUser);
        echo '<h5>Sukses Membuat user Admin <h5>
        <p>Silahkan Hapus Item Berikut :</p>
        <ol>
        <li>Route /BuatAdmin di file route/web.php</li>
        <li>Method BuatUserAdmin pada Controller UserController</li>
        </ol>
        <p>Silahkan Login
        <a href = "http://localhost:8000">Disini</p>';
    }
}
