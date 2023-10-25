<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //



    public function __construct()
    {
        $this->middleware(' auth')->except('logout');
    }

    public function index()
    {
        return view('home');
    }
}
