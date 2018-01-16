<?php 
/**
* 
*/
class Comment extends CI_Controller
{
	
	function __construct()
	{
		parent ::__construct();
		$this->load->model('coment');
	}
	public function pembangunan()
	{
		$this->coment->pembangunan();
		redirect('bangun/'.$this->input->post('id_pembangunan'));
	}
	public function agenda()
	{
		$this->coment->agenda();
		redirect('viewagenda/'.$this->input->post('id_agenda'));
	}
}