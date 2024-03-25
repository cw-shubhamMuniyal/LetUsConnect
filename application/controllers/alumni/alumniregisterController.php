<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumniregisterController extends CI_Controller {
    function __construct(){
    parent::__construct();
    if(isset($_SESSION['emailSession']))
    {
        header("location:alumniController");
    }
    $this->load->model('modelAlumni/alumniRegisterDetails','registerDetails');
    $this->load->model('modelAlumni/chatDetails','chatDetails');
	}
	public function index()
	{
		$this->load->view('viewAlumni/auth-register');
    $this->load->database();
  }
    
    public function onRegister()
    {
        $firstName = $this->input->post('first_name');//True indicates xss protection
        $lastName = $this->input->post('last_name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $passwordConfirm = $this->input->post('password-confirm');
        $profilePicture = "studentDefaultImg.png";
        $detailsArray = array("firstName" => $firstName, "middleName" => "", "lastName" => $lastName, "email" => $email, "password" => $password , "profilePicture" => $profilePicture, "bio" => "", "interest" => "","role" => 4);
        $this->registerDetails->insertRegisterDetails($detailsArray);

        $detailsArray['stuProfile'] = array("firstName" => $firstName, "middleName" => "", "lastName" => $lastName, "email" => $email, "password" => $password , "profilePicture" => $profilePicture, "bio" => "", "interest" => "");
        $this->load->library("session");
        $this->session->set_userdata('emailSession', $email);

        // adding details into login table for working of chat part
        $loginData = array(
          'username'  => $email,
          'password'  => $password
         );

         $this->chatDetails->insertLoginDetails($loginData);
     
        //  $query = "
        //  INSERT INTO login 
        //  (username, password) 
        //  VALUES (:username, :password)
        //  ";
        //  $statement = $connect->prepare($query);
        //  if($statement->execute($data))

        // Added for chat system to work properly
        $data = array("email" => $email);
        $user_id = $this->chatDetails->getLoginDetails($data);
        $this->session->set_userdata('user_id', $user_id);
        $data = array("user_id"  => $user_id);
        $_SESSION['login_details_id'] = $this->chatDetails->getUserId($data);

        header("location:alumniController");
        $this->load->view("viewAlumni/student-profile", $detailsArray);
    }

    public function checkIfSameEmailExists()
    {
      $email = $this->input->post('email');
      $query = $this->db->get('alumnitable');

      foreach ($query->result() as $row)
      {
        if(($row->email) == ($email))
        {
          echo "true";
          return;
          break;
        }
      }
      echo "false";
      return;
    }

    
}