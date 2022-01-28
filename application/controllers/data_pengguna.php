<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class data_pengguna extends CI_Controller {

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
		$data_pengguna = $this->db->query("SELECT * FROM user")->result();
		$data['data_pengguna'] = $data_pengguna;
		$data['base_url'] = base_url();
		$data['page'] = "data_pengguna";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('data_pengguna',$data);
		$this->load->view('template/footer',$data);
	}

	public function delete($id){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$this->db->delete('user', ['id_user' => $id]);
		$this->session->set_flashdata('message',
					'<div class="alert alert-success" role="alert">
						Data calon berhasil dihapus!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>');
			redirect('data_pengguna');
	}

	public function tambah() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data['page'] = "data_pengguna";
		$data['base_url'] = base_url();
		// $data['data_pengguna'] = $this->db->get_where('user', ['level' => 2])->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('tambah_data_pengguna',$data);
		$this->load->view('template/footer',$data);
	}

	public function simpan(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data = [
			'nama_user'	=> $this->input->post('nama_user'),
			'username' 	=> $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level'	=> $this->input->post('level'),
		];

		$this->db->insert('user', $data);
		$this->session->set_flashdata('message',
					'<div class="alert alert-success" role="alert">
						Data calon berhasil ditambah!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>');
		redirect(base_url('data_pengguna'));
          
       }

	public function edit($id) {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nama_user = addslashes($this->input->get("nama_user"));
		$user = $this->db->get_where('user', ['id_user' => $id])->row_array();
		$data['row'] = $user;
		$data['base_url'] = base_url();
		$data['page'] = "data_pengguna";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('edit_data_pengguna',$data);
		$this->load->view('template/footer',$data);
	}

	public function submitedit($id){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data = [
			'id_user'	=> $id,
			'nama_user'	=> $this->input->post('nama_user'),
			'username' 	=> $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level'	=> $this->input->post('level'),
		];

		$this->db->update('user', $data, ['id_user' => $id]);
		$this->session->set_flashdata('message',
					'<div class="alert alert-success" role="alert">
						Data calon berhasil diedit!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>');
		redirect(base_url('data_pengguna'));
		
	}
}