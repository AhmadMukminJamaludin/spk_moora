<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class calon_perangkat_desa extends CI_Controller {

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
		$data['calon_perangkat_desa'] = $this->Users_db->getCalonPerangkatDesa();
		$data['base_url'] = base_url();
		$data['page'] = "calon_perangkat_desa";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('data_calon_perangkat_desa',$data);
		$this->load->view('template/footer',$data);
	}

	public function delete($id){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$this->db->delete('calon_perangkat_desa', ['id_calon' => $id]);
		$this->session->set_flashdata('message',
					'<div class="alert alert-success" role="alert">
						Data calon berhasil dihapus!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>');
			redirect('calon_perangkat_desa');
	}

	public function tambah() {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data['page'] = "data_calon_perangkat_desa";
		$data['base_url'] = base_url();
		$data['data_calon'] = $this->db->get_where('user', ['level' => 'user'])->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('tambah_data_calon_perangkat_desa',$data);
		$this->load->view('template/footer',$data);
	}

	public function simpan(){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data = [
			'nama'	=> $this->input->post('nama'),
			'alamat' 	=> $this->input->post('alamat'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
			'no_hp'	=> $this->input->post('no_hp'),
			'posisi'	=> $this->input->post('posisi'),
		];

		$this->db->insert('calon_perangkat_desa', $data);
		$this->session->set_flashdata('message',
					'<div class="alert alert-success" role="alert">
						Data calon berhasil ditambah!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>');
		redirect(base_url('calon_perangkat_desa'));
          
       }

	public function edit($id) {
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$nama = addslashes($this->input->get("nama"));
		$data['row'] = $this->Users_db->getCalonPerangkatDesaById($id);
		$data['base_url'] = base_url();
		$data['page'] = "data_calon_perangkat_desa";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);	
		$this->load->view('edit_data_calon_perangkat_desa',$data);
		$this->load->view('template/footer',$data);
	}

	public function submitedit($id){
		if(!$this->session->logged_in){
			redirect("Login");
		}
		$data = [
			'id_calon'	=> $id,
			'nama'	=> $this->input->post('nama'),
			'alamat' 	=> $this->input->post('alamat'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
			'no_hp'	=> $this->input->post('no_hp'),
			'posisi'	=> $this->input->post('posisi'),
		];

		$this->db->update('calon_perangkat_desa', $data, ['id_calon' => $id]);
		$this->session->set_flashdata('message',
					'<div class="alert alert-success" role="alert">
						Data calon berhasil diedit!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>');
		redirect(base_url('calon_perangkat_desa'));
		
	}
}