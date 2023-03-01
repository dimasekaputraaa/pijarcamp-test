<?php

class Home extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function index()
	{
		$this->load->model('Pijarcamp');
		$data['produk'] = $this->Pijarcamp->getAllData();
		$this->load->view('temp/head');
		$this->load->view('Home/index', $data);
		$this->load->view('temp/foot');
	}
}