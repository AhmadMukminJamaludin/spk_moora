<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Users_db extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function select() {
		
		$this->db->select('*');
		$this->db->from('users');	
		$query = $this->db->get();
        return $result = $query->result();
		
	}

	function add_user($nama,$username,$password,$email,$foto,$alamat,$telp,$gender) {
		$query="insert into users values('','$nama','$username','$password','$email','$foto','$alamat','$telp','$gender')";
		$this->db->query($query);
       
		
	}

	function update_user($nama,$username,$password,$email,$foto,$alamat,$telp,$gender) {
		$query="UPDATE users SET nama_user='$nama',username='$username',password='$password',email='$email',user_img='$foto',alamat_user='$alamat',telp='$telp',gender='$gender'";
		$this->db->query($query);
       
		
	}

	public function getKriteriaById($id)
	{
		$this->db->select('kriteria.*, user.nama_user');
        $this->db->from('kriteria');
        $this->db->join('user', 'user.id_user = kriteria.user_id');
		$this->db->where('user_id', $id);
		return $this->db->get()->result_array();
	}

	public function getPenentuById($id)
	{
		$this->db->select('rangking.*, calon_perangkat_desa.posisi');
		$this->db->from('rangking');
		$this->db->join('calon_perangkat_desa', 'calon_perangkat_desa.user_id = rangking.user_id');
		$this->db->join('user', 'calon_perangkat_desa.user_id = user.id_user');
		$this->db->where('id_user', $id);
		return $this->db->get()->result_array();
	}

	public function getCalonPerangkatDesa()
	{
		$this->db->select('calon_perangkat_desa.*, user.nama_user');
		$this->db->from('calon_perangkat_desa');
		$this->db->join('user', 'user.id_user = calon_perangkat_desa.user_id');
		return $this->db->get()->result_array();
	}

	public function getCalonPerangkatDesaById($id)
	{
		$this->db->select('calon_perangkat_desa.*, user.nama_user');
		$this->db->from('calon_perangkat_desa');
		$this->db->join('user', 'user.id_user = calon_perangkat_desa.user_id');
		$this->db->where('id_calon', $id);
		return $this->db->get()->result_array();
	}

	public function getCalonPerangkatDesaByIdUser($id)
	{
		$this->db->select('calon_perangkat_desa.*, user.nama_user');
		$this->db->from('calon_perangkat_desa');
		$this->db->join('user', 'user.id_user = calon_perangkat_desa.user_id');
		$this->db->where('user_id', $id);
		return $this->db->get()->result_array();
	}
	
}