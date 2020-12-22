<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_buku;
use CodeIgniter\Model;

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

    public function save(){
        $model = new model_buku();
        $data = array(
            'judul' => $this->request->getPost('judul'),
            'slug' => $this->request->getPost('slug'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
        );
        $model->saveBuku($data);
        return redirect()->to('/Buku');
    }

    public function update(){
        $model = new Model_buku();
        $id = $this->request->getPost('id');
        $data = array(
            'judul' => $this->request->getPost('judul'),
            'slug' => $this->request->getPost('slug'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
        );
        $model->updateBuku($data, $id);
        return redirect()->to('/Buku');
    }

    public function delete(){
        $model = new Model_buku();
        $id = $this->request->getPost('id');
        $model->deleteBuku($id);
        return redirect()->to('/Buku');
    }
}