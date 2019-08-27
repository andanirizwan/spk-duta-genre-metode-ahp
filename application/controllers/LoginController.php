<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Mlogin");
    }

	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if (!empty($username)&&!empty($password)) {
				$validasi_login_db = $this->Mlogin->login($username,$password);
				if ($validasi_login_db != false) {
					$this->session->set_userdata('username',$username);
					$this->session->set_userdata('user');
					redirect('page/beranda');
				}

				redirect('/');
			}else{

				redirect('/');
			}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect('/');
	}
}
