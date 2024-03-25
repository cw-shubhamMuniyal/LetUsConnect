<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class passwordReset extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Admin/adminLogin','admin');
		$this->makeCheck();
		
	}
	private function makeCheck()
	{
		$ss = $this->input->get('code',true);
		$verify = $this->admin->checkCode($ss);
		if(!isset($ss) || !$verify)
		{
			redirect('404_error');
		}
	}
	public function index()
	{
			$this->load->view('login/resetPassword');	
	}
	public function requester()
	{
		$ss = $this->input->get('code');
		$result = $this->admin->checkCode($ss);
		if(!$result)
		{
			redirect('404_error');
		}	
		else{
			$email = $result->email;
			$password = $this->security->xss_clean(html_escape($this->input->post('password')));
			$msg = $this->admin->resetPassword($email,$password);
			if($msg)
			{
				return true;
			}
			else{
				return false;
			}
		}
	}
}
?>