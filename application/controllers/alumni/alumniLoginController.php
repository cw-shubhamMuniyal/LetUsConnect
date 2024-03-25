<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumniLoginController extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(isset($_SESSION['emailSession']))
        {
            header("location:login");
        }

        $this->load->model('modelAlumni/loginDetails','loginDetails');
        $this->load->model('modelAlumni/chatDetails','chatDetails');
        
	}
	public function index()
	{
		$this->load->view('viewAlumni/auth-login');
    }

    // public function onLogin($email, $password)
    // {
    //     // $email = $this->input->post("email");
    //     // $password = $this->input->post("password");
    //     $data = array("email" => $email,"password" => $password);

    //     $isProperLogin = $this->loginDetails->getLoginDetails($data);
    //     $role = $this->loginDetails->getRole($data);
    //     if($isProperLogin == true)
    //     {
    //         $this->session->set_userdata('emailSession', $email);
    //         $this->session->set_userdata('role', $role);

    //         // chat part 
    //         $data = array("email" => $email);
    //         $user_id = $this->chatDetails->getLoginDetails($data);
    //         $this->session->set_userdata('user_id', $user_id);

    //         // $sub_query = "
    //         //         INSERT INTO login_details 
    //         //         (user_id) 
    //         //         VALUES ('".$row['user_id']."')
    //         //         ";
    //         // $statement = $connect->prepare($sub_query);
    //         // $statement->execute();
    //         $data = array("user_id"  => $user_id);
    //         $_SESSION['login_details_id'] = $this->chatDetails->getUserId($data);
    //         // header("location:alumniChatController");

    //         redirect('/alumniController');
    //     }
    //     else
    //     {
    //         $data = array("errorMsg" => "please cheeck username and password");
    //         $this->load->view("viewAlumni/auth-login", $data);
    //     }
    // }
}