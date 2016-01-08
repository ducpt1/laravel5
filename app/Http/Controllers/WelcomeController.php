<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index(){

    }

    public function thongtin(){
        //return view('thongtin');
        return redirect()->route('hcm');
    }
}
