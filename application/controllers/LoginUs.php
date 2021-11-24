<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginUs extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->lang->load('login','english');
	}

	public function index()
	{
		$this->load->view('loginUs');
	}
}
