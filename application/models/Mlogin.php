<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	public function login($username,$password)
	{
		$hasil = $this->db->where('username',$username)
						 					->where('password',$password)
						 					->limit(1)
						 					->get('login');
		if ($hasil->num_rows() > 0) {
			return $hasil->row();
		}else {
			return false;
		}
	}

}
