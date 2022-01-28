<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class KriteriaUser extends CI_Controller {

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
		$data_kriteria = $this->db->query("SELECT * from kriteria left join calon_perangkat_desa on kriteria.nama=calon_perangkat_desa.nama")->result();
		$bobot_kriteria = $this->db->query("SELECT * from bobot_kriteria")->result();
		$data['kriteria'] = $data_kriteria;
		$data['bobot'] = $bobot_kriteria;
		$data['base_url'] = base_url();
		$data['page'] = "kriteria";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('data_kriteria',$data);
		$this->load->view('template/footer',$data);
	}
}