<?php namespace App\Models;

use CodeIgniter\Model;

class model_buku extends Model{
    public function getBuku(){
        $builder = $this->db->table('Buku');
        $builder->select('*');
        return $builder->get();
    }
}