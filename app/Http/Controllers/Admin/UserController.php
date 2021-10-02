<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
       echo 'wwwww';
       // return view('auth.login');
    }

    public function updateuser()
    {
        return view('auth.login');
    }
}
