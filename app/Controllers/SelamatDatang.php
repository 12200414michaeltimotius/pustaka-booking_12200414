<?php

namespace App\Controllers;

class SelamatDatang extends BaseController{

    public function hal_awal(){
        return 'Saya lagi mengerjakan tugas WP pertemuan 2';
    }
    public function beranda_login(){
        return view(name : 'halaman/login');
    }
    public function daftar_member(){
        return view(name: 'halaman/daftar_member');
    }
}