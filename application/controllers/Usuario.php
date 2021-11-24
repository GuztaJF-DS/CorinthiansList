<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('UsuarioModel');
	}

	public function cadastrarUsuario(){ 
		$usuario = new UsuarioModel;
		$usuario->inserir();
		redirect(base_url('login'));
	}

	public function entrar(){
		$usuario = new UsuarioModel;
		$data['data'] = $usuario->listarCorinthianos();
		$this->load->view('home',$data);
	}

	public function entrarUs(){
		$usuario = new UsuarioModel;
		$data['data'] = $usuario->listarCorinthianosUs();
		$this->load->view('homeUs',$data);
	}

	public function sair(){
		$usuario = new UsuarioModel;
		$usuario->sair();
	}
	public function sairUs(){
		$usuario = new UsuarioModel;
		$usuario->sairUs();
	}

}
