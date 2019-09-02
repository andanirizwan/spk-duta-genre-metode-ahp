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
		$this->load->view('template/header');
		$this->load->view('beranda');
		$this->load->view('template/footer');
	}
	public function calonduta()
	{
		$data['duta'] = $this->Mpage->getallduta()->result();
		$this->load->view('template/header');
		$this->load->view('duta', $data);
		$this->load->view('template/footer');
	}
	public function tambahdataduta()
	{
		$this->load->view('template/header');
		$this->load->view('tambahduta');
		$this->load->view('template/footer');
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
		$this->load->view('template/header');
		$this->load->view('editduta',$data);
		$this->load->view('template/footer');
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
		$this->load->view('template/header');
		$this->load->view('kriteria', $data);
		$this->load->view('template/footer');
	}
	public function editkriteria($id){
		
		$data['kriteria']= $this->Mpage->getByIdkriteria($id)->result();
		$this->load->view('template/header');
		$this->load->view('editkriteria',$data);
		$this->load->view('template/footer');
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
		$this->load->view('template/header');
		$this->load->view('tambahseleksi',$data);
		$this->load->view('template/footer');
	}
	public function updateseleksi()
	{
		$test_tertulis = $this->input->post('test_tertulis');
		$presentasi = $this->input->post('presentasi');
		$wawancara = $this->input->post('wawancara');
		$uji_bakat = $this->input->post('uji_bakat');
		$id = $this->input->post('id_nama');

		if ($id == '1') {

			$data = array(
				'test_tertulis' => '0.078',
				'presentasi' => '0.07',
				'wawancara' => '0.74',
				'uji_bakat' => '0.053',
				'total_nilai' => '0.072'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '2') {

			$data = array(
				'test_tertulis' => '0.071',
				'presentasi' => '0.071',
				'wawancara' => '0.067',
				'uji_bakat' => '0.056',
				'total_nilai' => '0.069'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '3') {

			$data = array(
				'test_tertulis' => '0.076',
				'presentasi' => '0.071',
				'wawancara' => '0.077',
				'uji_bakat' => '0.053',
				'total_nilai' => '0.071'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '4') {

			$data = array(
				'test_tertulis' => '0.073',
				'presentasi' => '0.063',
				'wawancara' => '0.065',
				'uji_bakat' => '0.053',
				'total_nilai' => '0.066'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '5') {

			$data = array(
				'test_tertulis' => '0.078',
				'presentasi' => '0.083',
				'wawancara' => '0.085',
				'uji_bakat' => '0.1142',
				'total_nilai' => '0.088'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '6') {

			$data = array(
				'test_tertulis' => '0.078',
				'presentasi' => '0.076',
				'wawancara' => '0.077',
				'uji_bakat' => '0.135',
				'total_nilai' => '0.084'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '7') {

			$data = array(
				'test_tertulis' => '0.063',
				'presentasi' => '0.075',
				'wawancara' => '0.067',
				'uji_bakat' => '0.053',
				'total_nilai' => '0.067'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '8') {

			$data = array(
				'test_tertulis' => '0.064',
				'presentasi' => '0.073',
				'wawancara' => '0.069',
				'uji_bakat' => '0.053',
				'total_nilai' => '0.067'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '9') {

			$data = array(
				'test_tertulis' => '0.088',
				'presentasi' => '0.079',
				'wawancara' => '0.078',
				'uji_bakat' => '0.134',
				'total_nilai' => '0.089'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '10') {

			$data = array(
				'test_tertulis' => '0.084',
				'presentasi' => '0.067',
				'wawancara' => '0.067',
				'uji_bakat' => '0.053',
				'total_nilai' => '0.072'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '11') {

			$data = array(
				'test_tertulis' => '0.053',
				'presentasi' => '0.068',
				'wawancara' => '0.069',
				'uji_bakat' => '0.055',
				'total_nilai' => '0.060'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '12') {

			$data = array(
				'test_tertulis' => '0.046',
				'presentasi' => '0.067',
				'wawancara' => '0.066',
				'uji_bakat' => '0.053',
				'total_nilai' => '0.057'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '13') {

			$data = array(
				'test_tertulis' => '0.064',
				'presentasi' => '0.063',
				'wawancara' => '0.065',
				'uji_bakat' => '0.053',
				'total_nilai' => '0.062'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '14') {

			$data = array(
				'test_tertulis' => '0.085',
				'presentasi' => '0.074',
				'wawancara' => '0.074',
				'uji_bakat' => '0.053',
				'total_nilai' => '0.076'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '15') {

			$data = array(
				'test_tertulis' => '0.083',
				'presentasi' => '0.089',
				'wawancara' => '0.062',
				'uji_bakat' => '0.072',
				'total_nilai' => '0.082'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '16') {

			$data = array(
				'test_tertulis' => '0.083',
				'presentasi' => '0.083',
				'wawancara' => '0.062',
				'uji_bakat' => '0.089',
				'total_nilai' => '0.082'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '17') {

			$data = array(
				'test_tertulis' => '0.081',
				'presentasi' => '0.081',
				'wawancara' => '0.062',
				'uji_bakat' => '0.083',
				'total_nilai' => '0.079'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '18') {

			$data = array(
				'test_tertulis' => '0.088',
				'presentasi' => '0.092',
				'wawancara' => '0.143',
				'uji_bakat' => '0.089',
				'total_nilai' => '0.095'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '19') {

			$data = array(
				'test_tertulis' => '0.113',
				'presentasi' => '0.108',
				'wawancara' => '0.143',
				'uji_bakat' => '0.099',
				'total_nilai' => '0.112'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '20') {

			$data = array(
				'test_tertulis' => '0.097',
				'presentasi' => '0.087',
				'wawancara' => '0.062',
				'uji_bakat' => '0.09',
				'total_nilai' => '0.089'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '21') {

			$data = array(
				'test_tertulis' => '0.102',
				'presentasi' => '0.087',
				'wawancara' => '0.062',
				'uji_bakat' => '0.088',
				'total_nilai' => '0.091'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '22') {

			$data = array(
				'test_tertulis' => '0.083',
				'presentasi' => '0.098',
				'wawancara' => '0.062',
				'uji_bakat' => '0.093',
				'total_nilai' => '0.088'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '23') {

			$data = array(
				'test_tertulis' => '0.113',
				'presentasi' => '0.111',
				'wawancara' => '0.152',
				'uji_bakat' => '0.114',
				'total_nilai' => '0.116'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '24') {

			$data = array(
				'test_tertulis' => '0.073',
				'presentasi' => '0.078',
				'wawancara' => '0.062',
				'uji_bakat' => '0.087',
				'total_nilai' => '0.076'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
		if ($id == '25') {

			$data = array(
				'test_tertulis' => '0.085',
				'presentasi' => '0.087',
				'wawancara' => '0.127',
				'uji_bakat' => '0.094',
				'total_nilai' => '0.091'
	
				);
	
			$this->Mpage->updateseleksi($data,$id);
			redirect('page/seleksi');
		}
	}
	public function hasilpenilaian()
	{
		$data['duta'] = $this->Mpage->getallduta()->result();
		$this->load->view('template/header');
		$this->load->view('hasilpenilaian', $data);
		$this->load->view('template/footer');
	}
	public function hasilpenilaianlk()
	{
		$data['duta'] = $this->Mpage->getseleksilk()->result();
		$this->load->view('template/header');
		$this->load->view('hasilpenilaianlk', $data);
		$this->load->view('template/footer');
	}
	public function hasilpenilaianpr()
	{
		$data['duta'] = $this->Mpage->getseleksipr()->result();
		$this->load->view('template/header');
		$this->load->view('hasilpenilaianpr', $data);
		$this->load->view('template/footer');
	}
	public function rangking()
	{
		$data['duta'] = $this->Mpage->getallrangking()->result();
		$this->load->view('template/header');
		$this->load->view('rangking', $data);
		$this->load->view('template/footer');
	}
	public function rangkinglk()
	{
		$data['duta'] = $this->Mpage->getrangkinglk()->result();
		$this->load->view('template/header');
		$this->load->view('rangkinglk', $data);
		$this->load->view('template/footer');
	}
	public function rangkingpr()
	{
		$data['duta'] = $this->Mpage->getrangkingpr()->result();
		$this->load->view('template/header');
		$this->load->view('rangkingpr', $data);
		$this->load->view('template/footer');
	}
}
