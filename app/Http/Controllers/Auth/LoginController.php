<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // membuat fauction index untuk menampilkan halaman register
    public function index()
    {
        //return view berfungsi untuk menapilkan halaman register
        return view('pages.auth.login');
    }

    public function store(Request $request)
    {
        
    }
}
