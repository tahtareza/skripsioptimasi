<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){ 
		parent::__construct(); 

		if($this->session->userdata('level') == "0") {  
			redirect(base_url('C_admin'));  
		}
	} 

	public function index()
	{
		$this->load->view('index');
	}
}
