<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Mpage");
    }

	public function beranda()
	{
		$this->load->view('beranda');
	}
	public function calonduta()
	{
		$data['duta'] = $this->Mpage->getallduta()->result();
		$this->load->view('duta', $data);
	}
	public function tambahdataduta()
	{
		$this->load->view('tambahduta');
	}
	public function simpandataduta()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$ttl = $this->input->post('ttl');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamt');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'ttl' => $ttl,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'no_telp' => $no_telp,
			'alamat' => $alamat
			);

		$this->Mpage->saveduta($data,'calon_duta');
		redirect('page/calonduta');
	}
	public function editdataduta($id){
		
		$data['duta']= $this->Mpage->getByIdduta($id)->result();
		$this->load->view('editduta',$data);
	}
	public function updateduta()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$ttl = $this->input->post('ttl');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$id = $this->input->post('id');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'ttl' => $ttl,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'no_telp' => $no_telp,
			'alamat' => $alamat
			);

		$this->Mpage->updateduta($data,$id);
		redirect('page/calonduta');
	}
	public function kriteria()
	{
		$data['kriteria'] = $this->Mpage->getallkriteria()->result();
		$this->load->view('kriteria', $data);
	}
	public function editkriteria($id){
		
		$data['kriteria']= $this->Mpage->getByIdkriteria($id)->result();
		$this->load->view('editkriteria',$data);
	}
	public function updatekriteria()
	{
		$nama_kriteria = $this->input->post('nama_kriteria');
		$bobot_kriteria = $this->input->post('bobot_kriteria');
		$id = $this->input->post('id');

		$data = array(
			'nama_kriteria' => $nama_kriteria,
			'bobot_kriteria' => $bobot_kriteria

			);

		$this->Mpage->updatekriteria($data,$id);
		redirect('page/kriteria');
	}
	public function seleksi()
	{
		$data['seleksi']= $this->Mpage->getallduta()->result();
		$this->load->view('tambahseleksi',$data);
	}
	public function simpanseleksi()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$ttl = $this->input->post('ttl');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamt');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'ttl' => $ttl,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'no_telp' => $no_telp,
			'alamat' => $alamat
			);

		$this->Mpage->saveduta($data,'calon_duta');
		redirect('page/calonduta');
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
