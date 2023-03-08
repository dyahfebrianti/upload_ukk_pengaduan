<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login_view');
    }
    public function dash(){
        return view('dashboard');
    }
}
