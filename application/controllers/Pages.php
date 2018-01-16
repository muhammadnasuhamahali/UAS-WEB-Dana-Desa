<?php 
/**
* 
*/
class Pages extends CI_Controller
{
	function __Construct()
	{
		parent ::__construct();
		$this->load->model('coment');
	}
	
	public function view($page = 'home')
	{
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404();
		}
		//$data['title'] = ucfirst($page);
		$data['keuangan'] = $this->post_model->uang();
		$data['keuang'] = $this->post_model->uangLimit();
		$data['pembangunan'] = $this->post_model->bangun();
		$data['bangun'] = $this->post_model->bangunLimit();
		$data['agenda'] = $this->post_model->agen();
		$data['agenda1'] = $this->post_model->agen1();
		$data['feedback'] = $this->post_model->feedback();
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}
	public function bangun($id_bangun)
	{
		$data['bangun'] = $this->post_model->viewBangun($id_bangun);
		$data['comments'] = $this->coment->get_pembangunan($id_bangun);
		$this->load->view('templates/header');
		$this->load->view('pages/bangun', $data);
		$this->load->view('templates/footer');
	}

	public function viewagenda($id_agenda)
	{
		$data['agenda'] = $this->post_model->viewAgenda($id_agenda);
		$data['comments'] = $this->coment->get_agenda($id_agenda);
		$this->load->view('templates/header');
		$this->load->view('pages/viewagenda', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->post_model->insert();
		redirect('about');
	
	}
	public function cari()
	{
		$cari = $this->input->post('cari');
		
		$data['caripembangunan'] = $this->post_model->pencarian1($cari);
		$data['cariagenda'] = $this->post_model->pencarian2($cari);
		$this->load->view('templates/header');
		$this->load->view('pages/pencarian', $data);
		$this->load->view('templates/footer');
	}
	
}