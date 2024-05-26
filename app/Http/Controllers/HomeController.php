<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function halaman1(){
        echo "ini halaman 1 di Controller Home";
    }
    public function halaman2(){
        return view ('welcome');
    }
}
