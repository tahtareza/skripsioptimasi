<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){ 
		parent::__construct(); 
		$this->load->model('M_login');
		$this->load->model('M_kebutuhan');
		$this->load->model('M_bmt');
		$this->load->model('M_history');

		if($this->session->userdata('level') != "0") {  
			redirect('');  
		}
	} 

	public function index()
	{
		$this->load->view('index');
	}

	public function kebutuhan()
	{
		$data['keb']=$this->M_kebutuhan->kebutuhan();
		$this->load->view('kebutuhan', $data);
	}
	public function addkebutuhan()
	{
		$data['idmax'] = $this->M_kebutuhan->getMaxId();
		$this->load->view('menuadm/kebutuhan_add', $data);
	}
	public function editkebutuhan($id)
	{
		$data['keb']=$this->M_kebutuhan->getKebWhereId($id);
		$this->load->view('menuadm/kebutuhan_edit', $data);
	}
	public function deletekebutuhan($id)
	{
		$this->M_kebutuhan->delete($id);
		redirect('C_admin/kebutuhan');
	}

	public function bmt()
	{
		$data['bmt']=$this->M_bmt->bmt();
		$this->load->view('bmt', $data);
	}
	public function addbmt()
	{
		$data['idmax'] = $this->M_bmt->getMaxId();
		$data['jenisbmt']=$this->M_bmt->jenisBmt();
		$this->load->view('menuadm/bmt_add', $data);
	}
	public function editbmt($id)
	{
		$data['bmt']=$this->M_bmt->getBmtWhereId($id);
		$data['jenisbmt']=$this->M_bmt->jenisBmt();
		$this->load->view('menuadm/bmt_edit', $data);
	}
	public function deletebmt($id)
	{
		$this->M_bmt->delete($id);
		redirect('C_admin/bmt');
	}

	public function history(){
		$data['history']=$this->M_history->histori();
		$this->load->view('history', $data);
	}
	public function deletehistory($id)
	{
		$this->M_history->delete($id);
		redirect('C_admin/history');
	}
	
	public function report(){
		redirect('Report');
	}
}
