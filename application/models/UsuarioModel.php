<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model{

	public function inserir(){
		$data =  array(
			'nm_usuario' => $this->input->post('nome'),
			'ds_email' => $this->input->post('email'),
			'cod_senha' => md5($this->input->post('senha')),
			'bl_corintiano' => $this->input->post('corintiano')
		);

		return $this->db->insert("tb_usuario",$data);
	}


	public function sair(){
		$this->session->unset_userdata('logado');
		redirect(base_url('login'));
	}

	public function sairUs(){
		$this->session->unset_userdata('logado');
		redirect(base_url('loginUs'));
	}

	public function listarCorinthianos(){
		$query = $this->db->get("tb_usuario");
		$email = $this->input->post('email');
		$senha = md5($this->input->post('senha'));

		$this->db->where('ds_email',$email);
		$this->db->where('cod_senha',$senha);

		$usuario =  $this->db->get("tb_usuario")->row_array();

		if($usuario){
			$this->session->set_userdata("logado",$usuario);
			return $query->result();
			redirect(base_url('home'));
		}else{
			redirect(base_url('login'));
		}
	}

	public function listarCorinthianosUs(){
		$query = $this->db->get("tb_usuario");
		$email = $this->input->post('email');
		$senha = md5($this->input->post('senha'));

		$this->db->where('ds_email',$email);
		$this->db->where('cod_senha',$senha);

		$usuario =  $this->db->get("tb_usuario")->row_array();

		if($usuario){
			$this->session->set_userdata("logado",$usuario);
			return $query->result();
			redirect(base_url('homeUs'));
		}else{
			redirect(base_url('loginUs'));
		}
	}
}
