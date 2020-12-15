<?php namespace App\Controllers;

class Buku extends BaseController{
    public function index(){
        $data = [
            'title' => 'Daftar Buku'
        ];
        echo view('layout/header',$data);
        echo view('buku/index');
        echo view('layout/footer');
    }
}