<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebutuhan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_kebutuhan');
	}

	public function index()
	{
		$data['keb']=$this->M_kebutuhan->kebutuhan();
		$this->load->view('kebutuhan', $data);
	}

	public function add(){
		$dat = array(
			'id'	=>	$this->input->post('id'),
			'nama'	=>	$this->input->post('nama'),
			'umur'	=>	$this->input->post('umur'),
			'pk'	=>	$this->input->post('pk'),
			'em'	=>	$this->input->post('em'),
			'met'	=>	$this->input->post('met'),
			'lis'	=>	$this->input->post('lis'),
			'ca'	=>	$this->input->post('ca'),
			'p'	=>	$this->input->post('p')
		);
		$this->M_kebutuhan->insert($dat);
		redirect('C_admin/kebutuhan');
	}

	public function update(){
		$dat=array(
			'id'	=>	$this->input->post('id'),
			'nama'	=>	$this->input->post('nama'),
			'umur'	=>	$this->input->post('umur'),
			'pk'	=>	$this->input->post('pk'),
			'em'	=>	$this->input->post('em'),
			'met'	=>	$this->input->post('met'),
			'lis'	=>	$this->input->post('lis'),
			'ca'	=>	$this->input->post('ca'),
			'p'	=>	$this->input->post('p')
		);
		$where=$this->input->post('id_old');
		$this->M_kebutuhan->update($dat, $where);
		redirect('C_admin/kebutuhan');
	}

}