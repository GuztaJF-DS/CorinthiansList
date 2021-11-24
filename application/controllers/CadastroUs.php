<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroUs extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->lang->load('cadastro','english');
	}
	
	public function index()
	{
		$this->load->view('cadastro');
	}
}
