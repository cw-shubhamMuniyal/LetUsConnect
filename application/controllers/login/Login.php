<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->logggedIn();
		$this->load->model('Admin/adminLogin','admin');

		$this->load->model('modelAlumni/loginDetails','loginDetails');
        $this->load->model('modelAlumni/chatDetails','chatDetails');
	}
	private function logggedIn()
	{
		if($this->session->userdata('authenticated'))
		{
			if($this->session->userdata('role') == 1)
			{
				redirect('dashboard');
			}
			else if($this->session->userdata('role') == 2)
			{
				redirect('office');
			}
			else if($this->session->userdata('role') == 3)
			{

			}
			else{

			}
			
		}
	}
	public function index()
	{
		$this->load->view('login/loginAdmin');
	}
	public function userAdmin()
	{
		/*print_r("I have reached Contoller");
		exit;*/
		if($this->session->userdata('authenticated'))
		{
			if($this->session->userdata('role') == 1)
			{
				redirect('dashboard');
			}
			else if($this->session->userdata('role') == 2)
			{
				redirect('office');
			}
			else if($this->session->userdata('role') == 3)
			{

			}
			else{

			}
		}
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if((strcmp($email,"tpooffice1@gmail.com") != 0) && (strcmp($email,'cpp.tpo@gmail.com') != 0))
		{
			$this->onLogin($email, $password);
		}
		else
		{
			$email=$this->security->xss_clean(html_escape($email));
			$password=$this->security->xss_clean(html_escape($password)); 
			// print_r($email.' '.$password);
			// exit;  
			$users_admin = $this->admin->login($email,$password);   
			if($users_admin)
			{
				$user_admin_data = array(
					'email' => $users_admin->email,
					'role' => $users_admin->role,
					'authenticated' => TRUE
				);
				$this->session->set_userdata($user_admin_data);
				if($users_admin->role==1)
				{
					redirect('dashboard');
				}
				else if($users_admin->role == 2)
				{
					redirect('office');
				}
				else if($users_admin->role == 3)
				{

				}
				else{

				}
				
			}     
			else{
			//print_r('resturned from model unsuccessfullly');
				redirect(base_url());
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function onLogin($email, $password)
    {
        // $email = $this->input->post("email");
        // $password = $this->input->post("password");
        $data = array("email" => $email,"password" => $password);

        $isProperLogin = $this->loginDetails->getLoginDetails($data);
        $role = $this->loginDetails->getRole($data);
        if($isProperLogin == true)
        {
            $this->session->set_userdata('emailSession', $email);
            $this->session->set_userdata('role', $role);

            // chat part 
            $data = array("email" => $email);
            $user_id = $this->chatDetails->getLoginDetails($data);
            $this->session->set_userdata('user_id', $user_id);

            // $sub_query = "
            //         INSERT INTO login_details 
            //         (user_id) 
            //         VALUES ('".$row['user_id']."')
            //         ";
            // $statement = $connect->prepare($sub_query);
            // $statement->execute();
            $data = array("user_id"  => $user_id);
            $_SESSION['login_details_id'] = $this->chatDetails->getUserId($data);
            // header("location:alumniChatController");

            redirect('/alumniController');
        }
        // else
        // {
        //     $data = array("errorMsg" => "please cheeck username and password");
        //     $this->load->view("viewAlumni/auth-login", $data);
        // }
    }
}
?>