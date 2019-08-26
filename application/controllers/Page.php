<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // $this->load->model("page_model");
    }

	public function beranda()
	{
		$this->load->view('beranda');
	}
	public function calonduta()
	{
		$this->load->view('duta');
	}
	public function tambahdataduta()
	{
		$this->load->view('tambahduta');
	}
	public function kriteria()
	{
		$this->load->view('kriteria');
	}
	public function hasilpenilaian()
	{
		$this->load->view('hasilpenilaian');
	}
	public function rangking()
	{
		$this->load->view('rangking');
	}
}
