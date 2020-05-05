<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmt extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_bmt');
	}

	public function index()
	{
		$data['bmt']=$this->M_bmt->bmt();
		$this->load->view('bmt', $data);
	}

	public function add(){
		$dat = array(
			'id'	=>	$this->input->post('id'),
			'nama'	=>	$this->input->post('nama'),
			'pk'	=>	$this->input->post('pk'),
			'em'	=>	$this->input->post('em'),
			'met'	=>	$this->input->post('met'),
			'lis'	=>	$this->input->post('lis'),
			'ca'	=>	$this->input->post('ca'),
			'p'	=>	$this->input->post('p'),
			'harga'	=>	$this->input->post('harga'),
			'id_jenis'	=>	$this->input->post('id_jenis')
		);
		$this->M_bmt->insert($dat);
		redirect('C_admin/bmt');
	}

	public function update(){
		$dat=array(
			'id'	=>	$this->input->post('id'),
			'nama'	=>	$this->input->post('nama'),
			'pk'	=>	$this->input->post('pk'),
			'em'	=>	$this->input->post('em'),
			'met'	=>	$this->input->post('met'),
			'lis'	=>	$this->input->post('lis'),
			'ca'	=>	$this->input->post('ca'),
			'p'	=>	$this->input->post('p'),
			'harga'	=>	$this->input->post('harga'),
			'id_jenis'	=>	$this->input->post('id_jenis')
		);
		$where=$this->input->post('id_old');
		$this->M_bmt->update($dat, $where);
		redirect('C_admin/bmt');
	}

}