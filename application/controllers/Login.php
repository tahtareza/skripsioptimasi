<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){ 
		parent::__construct(); 
		$this->load->model('M_login');
		$this->load->library(array('session'));
	} 

	public function index()
	{
		$this->load->view('login');
	}

	public function aksi_login()
	{
		$uname=$this->input->post('username');
		$pwd=$this->input->post('password');
		$cek=$this->M_login->cek_login($uname,$pwd);
		if($cek>0){//jika ada ditabel
			$data_session=array(
					'uname'=>$cek->uname,
					'level'=> $cek->level
				);
			$this->session->set_userdata($data_session);  
			if($this->session->userdata('level')==0) {   
				redirect('C_admin');  
			}

		}else{
			echo "<script type=\"text/javascript\"> alert('username dan password salah!'); </script>";
			redirect('');
		}
	}


	function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
