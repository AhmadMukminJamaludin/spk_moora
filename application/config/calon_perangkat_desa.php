<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class data_calon_perangkat_desa extends CI_Controller {

	public function __construct() {
		
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('User_db');
		$this->load->helper(array('form', 'url'));
		
	}
		
	public function index() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data_calon_perangkat_desa = $this->db->query("SELECT * from calon_perangkat_desa")->result();
		$data['calon_perangkat_desa'] = $calon_perangkat_desa;
		$data['base_url'] = base_url();
		$data['page'] = "calon_perangkat_desa";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('data_calon_perangkat_desa',$data);
		$this->load->view('template/footer',$data);
	}

	public function delete(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nis = addslashes($this->input->get("nama"));
		$data_calon_perangkat_desa = $this->db->query("DELETE from data_calon_perangkat_desa where nama='$nama'");
		$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been deleted</div>");
			redirect('data_calon_perangkat_desa');
	}

	public function tambah() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data['page'] = "data_calon_perangkat_desa";
		$data['base_url'] = base_url();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('tambah_data_calon_perangkat_desa',$data);
		$this->load->view('template/footer',$data);
	}

	public function simpan(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nama = addslashes($this->input->post("nama"));
		$alamat = addslashes($this->input->post("alamat"));
		$tempat_tanggal_lahir = addslashes($this->input->post("tempat_tanggal_lahir"));
		$jenis_kelamin = addslashes($this->input->post("jenis_kelamin"));
		$agama = addslashes($this->input->post("agama"));
		$no_hp = addslashes($this->input->post("no_hp"));

		$sql = "INSERT INTO data_calon_perangkat_desa VALUES ('$nama', '$alamat','$tempat_tanggal_lahir','$jenis_kelamin','$agama','$no_hp')";
		print_r($sql);
        $query = $this->db->query($sql);
        if ($query) {
        	$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been updated</div>");
			redirect('data_calon_perangkat_desa');
          
       }
	}

	public function edit() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nama = addslashes($this->input->get("nama"));
		$data_calon_perangkat_desa = $this->db->query("SELECT * from data_calon_perangkat_desa where nama='$nama'")->result();
		$data['data_calon_perangkat_desa'] = $data_calon_perangkat_desa;
		$data['base_url'] = base_url();
		$data['page'] = "data_calon_perangkat_desa";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('edit_calon_perangkat_desa',$data);
		$this->load->view('template/footer',$data);
	}

	public function submitedit(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nama = addslashes($this->input->post("nama"));
		$alamat = addslashes($this->input->post("alamat"));
		$tempat_tanggal_lahir = addslashes($this->input->post("tempat_tanggal_lahir"));
		$jenis_kelamin = addslashes($this->input->post("jenis_kelamin"));
		$agama = addslashes($this->input->post("agama"));
		$no_hp = addslashes($this->input->post("no_hp"));

		$sql = "UPDATE data_calon_perangkat_desa set
        nama='$nama',alamat='$alamat',tempat_tanggal_lahir='$tempat_tanggal_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',no_hp='$no_hp' where nama='$nama'";

        $query = $this->db->query($sql);
        if ($query) {
        	$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Data has been updated</div>");
			redirect('data_calon_perangkat_desa');
          
       }
	}
}