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
    public function getseleksilk()
    {
        return $this->db->get_where('calon_duta', ['jenis_kelamin' => 'laki_laki']);
    }
    public function getseleksipr()
    {
        return $this->db->get_where('calon_duta', ['jenis_kelamin' => 'perempuan']);
    }
    public function getallrangking()
    {
        $this->db->order_by('total_nilai', 'desc');
        return $this->db->get('calon_duta');
    }
    public function getrangkinglk()
    {
        $this->db->where('jenis_kelamin', 'laki_laki');
        $this->db->order_by('total_nilai', 'desc');
        return $this->db->get('calon_duta');
    }
    public function getrangkingpr()
    {
        $this->db->where('jenis_kelamin', 'perempuan');
        $this->db->order_by('total_nilai', 'desc');
        return $this->db->get('calon_duta');
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
    public function savekriteria($data,$table)
    {
         $this->db->insert($table,$data);
    }

    public function updateduta($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('calon_duta', $data);
    }
    public function updateseleksi($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('calon_duta', $data);
    }
    public function updatekriteria($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('kriteria', $data);
    }

    // public function deleteduta($id)
    // {
    //     $tables = array('matrik_transformasi', 'data_makanan');
    //     $this->db->where('id', $id);
    //     return $this->db->delete($tables);
        
    // }


}
