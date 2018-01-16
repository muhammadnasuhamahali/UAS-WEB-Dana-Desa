<?php 
/**
* 
*/
class Coment extends CI_Model
{
	
	function __construct()
	{

		$this->load->database();
	}
	public function pembangunan()
	{
		$data = array(
			'id_pembangunan' => $this->input->post('id_pembangunan'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'komentar' => $this->input->post('komentar') );
		return $this->db->insert('coment_pembangunan', $data);
	}
	public function get_pembangunan($id_bangun)
	{
		$query = $this->db->get_where('coment_pembangunan', array('id_pembangunan' => $id_bangun));
		return $query->result_array();
	}
	public function agenda()
	{
		$data = array(
			'id_agenda' => $this->input->post('id_agenda'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'komentar' => $this->input->post('komentar') );
		return $this->db->insert('coment_agenda', $data);
	}
	public function get_agenda($id_agenda)
	{
		$query = $this->db->get_where('coment_agenda', array('id_agenda' => $id_agenda));
		return $query->result_array();
	}
}