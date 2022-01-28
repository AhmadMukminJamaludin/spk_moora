<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class hitung extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Users_db');
		$this->load->helper(array('form', 'url'));
		
	}
		
	public function index() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data_calon_perangkat_desa = $this->db->query("SELECT * from kriteria left join calon_perangkat_desa on kriteria.nama=calon_perangkat_desa.nama")->result();
		$data_tahun = $this->db->query("SELECT DISTINCT tahun FROM kriteria ORDER BY tahun DESC")->result();
		$data['kriteria'] = $data_calon_perangkat_desa;
		$data['tahun'] = $data_tahun;
		$data['base_url'] = base_url();
		$data['page'] = "perhitungan";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('proses_hitung',$data);
		$this->load->view('template/footer',$data);
	}
}