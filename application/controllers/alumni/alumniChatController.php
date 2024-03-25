<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumniChatController extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(!isset($_SESSION['emailSession']))
		{
			header('location:'.base_url());
		}

		$this->load->model('modelAlumni/chatDetails','chatDetails');
	}
	public function index()
	{
		
		$this->load->view('viewAlumni/chat-page.php');
    }
}
?>