<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpage extends CI_Model {

	public function getallduta()
    {
        return $this->db->get('calon_duta');
    }
    public function getallkriteria()
    {
        return $this->db->get('kriteria');
    }
    public function getallmatrik()
    {
        return $this->db->get('matrik_transformasi');
    }
    public function getallrangking()
    {
        $this->db->order_by('nilai_alternatif', 'desc');
        return $this->db->get('matrik_transformasi');
    }
    
    public function getByIdduta($id)
    {
        return $this->db->get_where('calon_duta', ['id' => $id]);
    }
    public function getByIdkriteria($id)
    {
        return $this->db->get_where('kriteria', ['id' => $id]);
    }

    public function saveduta($data,$table)
    {
         $this->db->insert($table,$data);
    }
    public function savetransformasi($data,$table)
    {
         $this->db->insert($table,$data);
    }
    public function savekriteria($data,$table)
    {
         $this->db->insert($table,$data);
    }

    public function updateduta($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('calon_duta', $data);
    }
    public function updatetransformasi($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('matrik_transformasi', $data);
    }
    public function updatekriteria($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('kriteria', $data);
    }

    public function deletemakanan($id)
    {
        $tables = array('matrik_transformasi', 'data_makanan');
        $this->db->where('id', $id);
        return $this->db->delete($tables);
        
    }
    public function deletekriteria($id)
    {
        return $this->db->delete('data_makanan', array('id' => $id));
    }

}
