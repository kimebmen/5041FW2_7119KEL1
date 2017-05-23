<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use App\Http\Requests;
use App\Pengguna;
use Auth;
class SesiController extends Controller
{   

    public function landing()
    {
        return view('index');
    }
    public function index()
    {
        return view('home');
    }
    public function index2()
    {
        return view('home2');
    }
    public function form()
    {
        if(Auth::check() && Auth::user()->level=='admin'){
            return redirect('/yow');
        }
        else if(Auth::check() && Auth::user()->level=='operator'){
            return redirect('/yaw');
        }
        return view('login');
    }
    public function validasi(Request $input)
    {
        $this->validate($input,[
            'username'=>'required',
            'password'=>'required',
            ]);
        $pengguna = Pengguna::where($input->only('username','password'))->first();
        if(! is_null($pengguna)){
            Auth::login($pengguna);
            if(Auth::check() && Auth::user()->level=='admin'){
                return redirect('/yow')->with('informasi',"Selamat Datang ".Auth::user()->username);            
            }
            if(Auth::check() && Auth::user()->level=='operator'){
                return redirect('/yaw')->with('informasi',"Selamat Datang ".Auth::user()->username);            
            }
        }
        return redirect('/login')->withErrors(['Username Atau Password Salah']);
        
    }
    public  function logout()
    {
        if(Auth::check()){
            Auth::logout();
            return redirect('/login')->withErrors(['Silahkan Login Untuk Masuk Ke Sistem']);
          }else{
             return redirect('/login')->withErrors(['Silahkan Login Terlebih Dahulu']);
          }
        }  
}