<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    // function index ini berfungsi untuk menampilkan halaman index dari folder hello/register/index
    public function  index()
    {
        return view('register.register', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    // function store ini berfungsi untuk mengirim data inputan kedalam database
   
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:50',
            'username' => ['required','min:3','max:50', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:50'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi berhasil!! silahkan Login');
    }
}