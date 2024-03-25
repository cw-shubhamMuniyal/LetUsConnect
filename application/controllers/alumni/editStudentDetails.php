<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editStudentDetails extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(!isset($_SESSION['emailSession']))
		{
			header('location:'.base_url());
		}
        $this->load->model('modelAlumni/alumniEditDetails','editDetails');
        $this->load->model('modelAlumni/loginDetails','loginDetails');
	}
	public function index()
	{
		
    }
    
    public function onEdit()
    {
        $firstName = $this->input->post('firstname');
        $middleName = $this->input->post('middlename');
        $lastName = $this->input->post('lastname');
        $email = $this->session->userdata('emailSession');;

        // setting session again if user changes email address
        
        
        $profilePicture = $this->input->post('profilepicture');
        if(!isset($_FILES['profilepicture']) || $_FILES['profilepicture']['error'] == UPLOAD_ERR_NO_FILE) 
        {
            echo 'bye';
            $profilePicture = $this->loginDetails->getUserProfilePicture($email);
        }
        else
        {
            echo 'hi';
            $tagName = 'profilepicture';
            $profilePicture = $this->imageStoreOnServer($firstName, $middleName, $lastName, $tagName);
        }

        $interest = $this->input->post('interest');
        $bio = $this->input->post('bio');
        // echo "<script language=\"javascript\">alert($profilePicture);</script>";
        // echo "why empty".$profilePicture.$bio;

       
        
        $editDetailsArray = array("firstName" => $firstName, "middleName"=> $middleName, "lastName" => $lastName, "email" => $email, "profilePicture"=> $profilePicture, "interest" =>$interest, "bio" => $bio);
        $this->editDetails->insertEditDetails($editDetailsArray, $email);

        // $detailsArray['stuProfile'] = $this->loginDetails->getUserDetails($email);
        // $detailsArray['educationDetails'] = $this->loginDetails->getEducationDetails($email);
        // $this->load->view("viewAlumni/student-profile", $detailsArray);
        redirect('/alumniController');
    }

    function imageStoreOnServer($firstName, $middleName, $lastName, $tagName)
    {
        $path = "../ci/img/avatar/userUploads";
        $config_logo_image = array(
            'allowed_types' => 'jpg|jpeg|gif|png|jfif',
            'file_name' => $firstName.$middleName.$lastName,
            'upload_path' => $path,
            'max_size' => 3000,
            );
        $this->load->library('upload', $config_logo_image );

        // Delete the file for avoiding duplicate ones
        $nameOfFile = $_FILES[$tagName]['name'];
        $extOfFile = pathinfo($nameOfFile, PATHINFO_EXTENSION);
        $filename = $firstName.$middleName.$lastName.".".$extOfFile;
        $directoryName = "../ci/img/avatar/userUploads/";

        // This 2 lines of code for deleting the file if exists
        if (file_exists($directoryName.$filename)) {
            unlink($directoryName.$filename);
        }
        // else{
        //     echo file_exists($directoryName.$filename);
        //     echo $directoryName.$filename." not deleted";
        // }
                           
        if($this->upload->do_upload($tagName)){
            $logo_image_data = $this->upload->data();
            $nameOfFile = $_FILES[$tagName]['name'];
            $extOfFile = pathinfo($nameOfFile, PATHINFO_EXTENSION);

            $profilePicture = $firstName.$middleName.$lastName.".".$extOfFile;
        }
        else{

            $logo_image_data    = $this->upload->display_errors();
            $profilePicture = "studentDefaultImg.png";
            // echo $logo_image_data;
        }
        return $profilePicture;
    }


}