<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	function __construct(){ 
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function kebutuhan()
	{
		redirect('Kebutuhan');
	}

	public function bmt()
	{
		redirect('Bmt');
	}

	public function tentukanbmt()
	{
		redirect('Optimasi');
	}

	public function history(){
		redirect('History');
	}

	public function report(){
		redirect('Report');
	}
}
