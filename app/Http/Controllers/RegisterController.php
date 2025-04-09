<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index(Request $req) {
        return view('register', $req);
    }

    function register(Request $req) {

    }
}
