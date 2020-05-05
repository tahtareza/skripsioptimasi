<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandopt extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_kandopt');
		$this->load->model('M_bmt');
	}

	public function index()
	{
		$kandopt = array();
		$kandopt=$this->input->post('bmtopt');
		$data['kandopt']=$this->M_kandopt->getKanWhereId($kandopt);
		$data['totkandopt']=$this->M_kandopt->totkandopt($kandopt);
		$totkand=$this->M_kandopt->totkandopt($kandopt);

		$idusia=$this->input->post('uspil');
		$data['uspil']=$this->M_kandopt->getKebWhereId($idusia);
		$arruspil = $this->M_kandopt->getKebWhereId($idusia);
		$butuh=$this->M_kandopt->kebutuhan($arruspil);

		$data['comparison'] = array_combine($butuh, $totkand);

		$data['bmt']=$this->M_bmt->bmt();

		$this->load->view('kandopt', $data);
	}
}