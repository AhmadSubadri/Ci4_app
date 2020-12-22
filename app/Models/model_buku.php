<?php namespace App\Models;

use CodeIgniter\Model;

class model_buku extends Model{
    public function getBuku(){
        $builder = $this->db->table('Buku');
        $builder->select('*');
        return $builder->get();
    }

    public function saveBuku($data){
        $table = $this->table = 'buku';
        $query = $this->db->table('buku')->insert($data);
        return $query;
    }

    public function updateBuku($data, $id){
        $query = $this->db->table('buku')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteBuku($id){
        $query = $this->db->table('buku')->delete(array('id' => $id));
        return $query;
    }
}