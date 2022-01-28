<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class HomeUser extends CI_Controller {

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
		$id = $this->session->userdata('id_user');
		$data['calon_perangkat_desa'] = $this->Users_db->getCalonPerangkatDesaByIdUser($id);
		// SELECT * FROM `users` JOIN `positions` ON `positions`.`id_positions` = `users`.`position_id` WHERE position_id = '$kelas'
		$data['max'] = $this->db->query('SELECT max(nilai) FROM rangking')->result_array();
		$data['kriteria'] = $this->Users_db->getKriteriaById($id);
		$data['penentu'] = $this->Users_db->getPenentuById($id);
		$data['bobot'] = $this->db->query("SELECT * from bobot_kriteria")->result();
		$data['base_url'] = base_url();
		$data['page'] = "HomeUser";
		$this->load->view('templateuser/header',$data);
		$this->load->view('templateuser/sidebar',$data);	
		$this->load->view('home_user',$data);
		$this->load->view('templateuser/footer',$data);
	}

	public function kriteria() {
		if ($this->session->logged_in) {
			redirect("Login");
		}
		$data_kriteria = 
		$bobot_kriteria = 
		
		$data['base_url'] = base_url();
		$data['page'] = "kriteria";
		$this->load->view('templateuser/header',$data);
		$this->load->view('templateuser/sidebar',$data);
		$this->load->view('data_kriteria_user',$data);
		$this->load->view('templateuser/footer',$data);
    }
	
	public function calon_perangkat_desa() {
		if ($this->session->logged_in) {
			redirect("Login");
		}
		
		$data['base_url'] = base_url();
		$data['page'] = "calon_perangkat_desa";
		$this->load->view('templateuser/header',$data);
		$this->load->view('templateuser/sidebar',$data);
		$this->load->view('home_user',$data);
		$this->load->view('templateuser/footer',$data);
	}
	public function laporan() {
		if ($this->session->logged_in) {
			redirect("Login");
		}
		$data['thn'] = $this->db->query("SELECT DISTINCT tahun FROM rangking")->result();
		$id = $this->session->userdata('id_user');
		$data['nama'] = $this->Users_db->namaUser($id);
		$data['base_url'] = base_url();
		$data['page'] = "laporan";
		$this->load->view('templateuser/header',$data);
		$this->load->view('templateuser/sidebar',$data);
		$this->load->view('laporan_hasil_user',$data);
		$this->load->view('templateuser/footer',$data);
	}
}