<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view("pages.auth.index");
    }
    public function login(Request $request){}
    public function logout(Request $request){}
}
