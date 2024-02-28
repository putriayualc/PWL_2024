<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagerController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nama Saya Putri Ayu Aliciawati, NIM 2241720132';
    }
    public function articles($id){
        return 'Halaman artikel dengan ID ' . $id;
    }

}
