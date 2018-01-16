<?php

/**
* 
*/
class Input_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function admin($pass)
	{
		$data = array(
			'tgl_daftar' => date("Y-m-d"),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $pass );
		return $this->db->insert('user', $data);

	}

	public function input_agenda($image)
	{
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'image' => $image,
			'lokasi' => $this->input->post('lokasi'),
			'agenda' => $this->input->post('agenda'),
			'anggaran' => $this->input->post('anggaran'),
			'keterangan' => $this->input->post('keterangan') );
		return $this->db->insert('agenda', $data);
	}

	public function input_pembangunan($image)
	{
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'image' => $image,
			'lokasi' => $this->input->post('lokasi'),
			'bangun' => $this->input->post('bangun'),
			'anggaran' => $this->input->post('anggaran'),
			'keterangan' => $this->input->post('keterangan') );
		
		return $this->db->insert('pembangunan', $data);
	}

	public function input_keuangan($transaksi, $nominal, $saldoakhir)
	{
		$data = array(
			'aksi' => $transaksi,
			'nominal' => $nominal,
			'saldo' => $saldoakhir,
			'keterangan' => $this->input->post('keterangan') );
		return $this->db->insert('keuangan', $data);
	}
	public function uang_bangun($saldoakhir)
	{
		$uang = array(
			'aksi' => 'Pengeluaran',
			'nominal' => $this->input->post('anggaran'),
			'saldo' => $saldoakhir,
			'keterangan' => $this->input->post('keterangan') );
		return $this->db->insert('keuangan', $uang);
	}
}