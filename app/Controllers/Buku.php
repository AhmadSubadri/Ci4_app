<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_buku;

class Buku extends BaseController{
    public function index(){
        $data = [
            'title' => 'Daftar Buku'
        ];

        $model = new Model_buku();
        $data['buku'] = $model->getBuku()->getResult();
        echo view('layout/header',$data);
        echo view('buku/index',$data);
        echo view('layout/footer');
    }
}