<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class AuthController extends Controller
{

    public function login(){
        return View ('login');
    }


    public function loginProcess(){
        if (auth()->guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('admin')->with('success', 'Login Berhasil');
        }

		if (auth()->guard('mitra')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('mitra')->with('success', 'Login Berhasil');
        }

		if (auth()->guard('dinas')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('dinas')->with('success', 'Login Berhasil');
        }


        return redirect('login');
    }

    public function logout(){
        
        auth()->guard('admin')->logout();
		auth()->guard('mitra')->logout();
		auth()->guard('dinas')->logout();
        return redirect('/');
    }

   
}