<?php

class Aksi extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pijarcamp');
	}
	public function Tambah()
	{
		$this->load->view('temp/head');
		$this->load->view('Aksi/tdata');
		$this->load->view('temp/foot');
	}
	public function Ubah($id)
	{
		$queryDetail = $this->Pijarcamp->getData($id);
		$datadetail = array('queryAlldetail' => $queryDetail);

		$this->load->view('temp/head');
		$this->load->view('Aksi/udata', $datadetail);
		$this->load->view('temp/foot');
	}
	public function fungsiTambah()
	{
		$nama_produk = $this->input->post('nama_produk');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');
		
		$ArrInsert = array(
			'nama_produk' => $nama_produk,
			'keterangan' => $keterangan,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'jumlah' => $jumlah
		);
		echo "<pre>";
		print_r($ArrInsert);
		echo "</pre>";
		$this->Pijarcamp->tambahdata($ArrInsert);
		redirect(base_url(" "));
	}
	public function fungsiHapus($id)
	{
		$this->Pijarcamp->hapus($id);
		redirect(base_url(""));
	}
	public function fungsiUbah()
	{
		$nama_produk = $this->input->post('nama_produk');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');
		
		$ArrUbah = array(
			'nama_produk' => $nama_produk,
			'keterangan' => $keterangan,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'jumlah' => $jumlah
		);

		echo "<pre>";
		print_r($ArrUbah);
		echo "</pre>";
		$this->Pijarcamp->ubahdata($nama_produk, $ArrUbah);
		redirect(base_url(" "));
	}
}