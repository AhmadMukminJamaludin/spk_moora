<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Kriteria extends CI_Controller {

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
		$data_kriteria = $this->db->query("SELECT * from kriteria left join user on kriteria.user_id=user.id_user")->result();
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

	public function tambah() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data_calon_perangkat_desa = $this->db->query("SELECT * from calon_perangkat_desa")->result();
		$data['calon_perangkat_desa'] = $data_calon_perangkat_desa;
		$data['base_url'] = base_url();
		$data['page'] = "kriteria";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('tambah_kriteria',$data);
		$this->load->view('template/footer',$data);
	}

	public function proses_simpan(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nama = addslashes($this->input->post("nama"));
        $c1 =  addslashes($this->input->post("c1"));
        $c2 =  addslashes($this->input->post("c2"));
        $c3 =  addslashes($this->input->post("c3"));
        $c4 =  addslashes($this->input->post("c4"));
        $c5 =  addslashes($this->input->post("c5"));
        $c6 =  addslashes($this->input->post("c6"));
        $tahun =  addslashes($this->input->post("tahun"));


        $sql = "INSERT INTO kriteria values ('','$nama','$c1', '$c2', '$c3', '$c4','$c5', '$c6', '$tahun')";
        $simpan = $this->db->query($sql);

        if($simpan){
        	redirect('Kriteria');
        }
    }

	public function delete(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$id = addslashes($this->input->get("id"));
		$data_calon_perangkat_desa = $this->db->query("DELETE from kriteria where id_kriteria='$id'");
		$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been deleted</div>");
			redirect('Kriteria');
	}

	public function edit() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$idk = addslashes($this->input->get("id"));
		$data_kriteria = $this->db->query("SELECT * from kriteria left join calon_perangkat_desa on kriteria.user_id=calon_perangkat_desa.user_id join user on user.id_user=kriteria.user_id where kriteria.id_kriteria='$idk'")->result();
		$data_calon_perangkat_desa = $this->db->query("SELECT * from calon_perangkat_desa")->result();
		$data['kriteria'] = $data_kriteria;
		$data['calon_perangkat_desa'] = $data_calon_perangkat_desa;
		$data['base_url'] = base_url();
		$data['page'] = "kriteria";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('edit_kriteria',$data);
		$this->load->view('template/footer',$data);
	}

	public function proses_edit(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$id = $this->input->post('id_kriteria');
		$data = [
			'nama'	=> $this->input->post('nama'),
			'c1'	=> $this->input->post('c1'),
			'c2'	=> $this->input->post('c2'),
			'c3'	=> $this->input->post('c3'),
			'c4'	=> $this->input->post('c4'),
			'c5'	=> $this->input->post('c5'),
			'c6'	=> $this->input->post('c6'),
			'tahun'	=> $this->input->post('tahun'),
		];

        $this->db->update('kriteria', $data, ['id_kriteria' => $id]);
        redirect('Kriteria');
    }
}