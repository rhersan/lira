<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct() 
	{
			parent::__construct();
			$this->load->helper('url');
			 $this->load->library('session');
			// $this->sesion_inicio = $this->session->sesion_inicio ? true : false;
			// $this->load->model('Inicio_tb');
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('index');
		$this->load->view('layout/footer');
	}

	public function detalle_pruducto()
	{
		$this->load->view('layout/header');
		$this->load->view('product');
		$this->load->view('layout/footer');
	}
	public function store(){
		$this->load->view('layout/header');
		$this->load->view('store');
		$this->load->view('layout/footer');
	}
}
