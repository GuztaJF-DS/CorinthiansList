<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUs extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->lang->load('home','english');
	}

	public function index()
	{
		$this->load->view('home');
	}
}
