<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class tpoOfficeDashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->logggedIn();
		$this->load->model('Admin/adminLogin','admin');
	}
	private function logggedIn()
	{
		if(!$this->session->userdata('authenticated') && ($this->session->userdata('role') != 2))
		{
			redirect(base_url());
		}
	}
	public function index()
	{
		$this->load->view('tpoOffice/OfficeDashboard');
	}
}