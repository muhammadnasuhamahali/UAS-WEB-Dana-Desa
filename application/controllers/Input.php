<?php

/**
* 
*/
class Input extends CI_Controller
{
	
	public function index($page)
	{
		if (!file_exists(APPPATH.'views/admin/input/'.$page.'.php')) {
			show_404();
		}
		if (!$this->session->userdata('logged_in')) {
            # code...
            redirect('login');
        }
        $data['uang'] = $this->post_model->uangLimit();
        $data['title'] = 'halaman input';
        $this->load->view('templates/adminheader');
        $this->load->view('admin/input/'.$page, $data);
        $this->load->view('templates/adminfooter');
	}

	public function admin()
	{
		# code...
		$pass;
		$pass1 = md5($this->input->post('password'));
		$pass2 = md5($this->input->post('password2'));
		if ($pass1 == $pass2) {
			$pass = $pass1;
			$this->input_model->admin($pass);
			redirect('admin/admin');
		}else {
			$this->session->set_flashdata('password', 'kombinasi password salah');
			redirect('admin/input/admin');
		}
		
	}

	public function agenda()
	{
		// Upload Image
		$config['upload_path'] = './assets/images/agenda';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '20480';
		$config['max_width'] = '20000';
		$config['max_height'] = '20000';

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload()){
			$errors = array('error' => $this->upload->display_errors());
			$image = 'noimage.jpg';
		} else {
			$data = array('upload_data' => $this->upload->data());
			$image = $_FILES['userfile']['name'];
		}
		$nominal = (int)$this->input->post('anggaran');
		$saldo = (int)$this->input->post('saldo');
		$saldoakhir = $saldo - $nominal;

		$this->input_model->input_agenda($image);
		$this->input_model->uang_bangun($saldoakhir);

		redirect('admin/agenda');
	}

	public function pembangunan()
	{
		// Upload Image
		$config['upload_path'] = './assets/images/pembangunan';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '20480';
		$config['max_width'] = '20000';
		$config['max_height'] = '20000';

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload()){
			$errors = array('error' => $this->upload->display_errors());
			$image = 'noimage.jpg';
		} else {
			$data = array('upload_data' => $this->upload->data());
			$image = $_FILES['userfile']['name'];
		}
		$nominal = (int)$this->input->post('anggaran');
		$saldo = (int)$this->input->post('saldo');
		$saldoakhir = $saldo - $nominal;

		$this->input_model->input_pembangunan($image, $saldoakhir);
		$this->input_model->uang_bangun($saldoakhir);

		redirect('admin/pembangunan');
	}

	public function keuangan()
	{
		$transaksi = $this->input->post('transaksi');
		$nominal = (int)$this->input->post('nominal');
		
		
			$saldo = (int)$this->input->post('saldo');
		
		if ($transaksi == 'Pemasukan') {
			$saldoakhir = $saldo + $nominal;
		}
		if ($transaksi == 'Pengeluaran') {
			$saldoakhir = $saldo - $nominal;
		}

		$this->input_model->input_keuangan($transaksi, $nominal, $saldoakhir);

		redirect('admin/keuangan');
	}
}