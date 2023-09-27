<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cvController extends Controller
{
    public function index(){
        return view("cv.kelolacv");
    }

    public function addpg(){
        return view("cv.tambahcv");
    }
}
