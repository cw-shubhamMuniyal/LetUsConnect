<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumniController extends CI_Controller {
    function __construct(){
		parent::__construct();
		if(!isset($_SESSION['emailSession']))
		{
			header('location:'.base_url());
		}
		$this->load->model('modelAlumni/otherStuInfo','otherStuInfo');
		$this->load->model('modelAlumni/loginDetails','loginDetails');
		$this->load->model('modelAlumni/project','project');
		$this->load->model('modelAlumni/chatDetails','chatDetails');
		
	}
	public function index()
	{
		$role = $this->session->userdata("role");
		//$this->load->view("viewAlumni/student-profile", $role);

		/*die($role);*/
		$detailsArray['role'] = $role; 
		$email = $this->session->userdata("emailSession");
		//$role = $this->session->userdata("role");
		$detailsArray['stuProfile'] = $this->loginDetails->getUserDetails($email);
		//$detailsArray['educationDetails'] = $this->loginDetails->getEducationDetails($email);

		$detailsArray['dt'] = $this->getalledu($email);
		$detailsArray['dte'] = $this->getallpro($email);
		$detailsArray['edt'] = $this->getallexp($email);

		$detailsArray['projectDetails'] = $this->project->onFetch($email);
		//$detailsArray['educationDetails'] = $this->otherStuInfo->getStuDetails($email);

		$detailsArray['friendsDetailsArray'] = $this->showFriends($_SESSION["user_id"]);
		$this->load->view("viewAlumni/student-profile", $detailsArray);

		//$this->load->view('viewAlumni/student-profile');
	}
	
	// pass data from DB to view based on session
	public function fillDetailsFromDB()
	{
		$email = $this->session->userdata("emailSession");
		$detailsArray = $this->loginDetails->getUserDetails($email);
		$this->load->view("viewAlumni/edit-student-profile", $detailsArray);
		// $email = $this->session->userdata("emailSession");
		// $query = $this->db->get_where('alumnitable', array("email" => $email));
		// if($query->num_rows() == 1)
		// {
		// 	$row = $query->row_array();
		// 	$detailsArray = array("firstName" => $row["firstName"], "lastName" => $row["lastName"], "middleName" => $row["middleName"], "email" => $row["email"], "interest" => $row["interest"], "bio" => $row["bio"], "profilePicture" => $row["profilePicture"]);
        // 	$this->load->view("viewAlumni/edit-student-profile", $detailsArray);
		// }
	}

	public function getEmailID(){
		if(isset($_POST['search'])){
			$search = $_POST['search'];
			$result = $this->chatDetails->getsearchMatchEmail($search);
			foreach($result as $row){
				$response[] = array("profilePicture"=>$row['profilePicture'],"label"=>$row['email']);
			}
			echo json_encode($response);
		}
	}

	public function addFriendsFunction(){
		if(isset($_POST['emailID']) && $_POST['emailID'] != $_SESSION["emailSession"]){
			$emailIDFriend = $_POST['emailID'];
			$email = $this->session->userdata("emailSession");
			$data = array("email" => $email, "emailIDFriend" => $emailIDFriend);
			$this->chatDetails->addFriendsDB($data);
		}
	}

	public function showFriends($user_id){
		$friendsDetailsArray = $this->chatDetails->getOthersChatDetails($user_id);
		$friendsEmailArr = array();
		foreach($friendsDetailsArray as $friendsDet){
			$friendsEmailArr[] = '"'.$friendsDet["username"].'"';
		}
		$friendsDetails = $this->otherStuInfo->getFriendsDetails($friendsEmailArr);
		return $friendsDetails;
	} 

	// get students detials on clicking on the icon
	public function showFriendsPage(){
		$emailId = $this->uri->segment(2);
		$emailId = $emailId."@somaiya.edu";
		echo $emailId;

		$detailsArray['stuProfile'] = $this->loginDetails->getUserDetails($emailId);

		$query = $this->otherStuInfo->getAllEdu($emailId);
		$output = $query->result_array();
		$detailsArray['dt'] = json_encode($output);

		$query = $this->otherStuInfo->getAllPro($emailId);
		$output = $query->result_array();
		$detailsArray['dte'] = json_encode($output);

		$query = $this->otherStuInfo->getAllExp($emailId);
		$output = $query->result_array();
		$detailsArray['edt'] = json_encode($output);

		$data["email"] = $emailId;
		$user_id = $this->chatDetails->getLoginDetails($data);
		$detailsArray['friendsDetailsArray'] = $this->showFriends($user_id);

		$detailsArray['personalProfile'] = $this->loginDetails->getUserProfilePicture($_SESSION['emailSession']);
		$this->load->view("viewAlumni/show-student-profile", $detailsArray);

	}

	public function addEducationDetails()
	{
		$degree = $this->input->post('degree');
		$specialize = $this->input->post('specialize');
		$university = $this->input->post('university');
		$startMonth = $this->input->post('startMonth');
		$startYear = $this->input->post('startYear');
		$endMonth = $this->input->post('endMonth');
		$endYear = $this->input->post('endYear');
		$email = $this->session->userdata("emailSession");

		$educationDetailsArray = array("degree" => $degree, "specialize" => $specialize, "university" => $university, "startMonth" =>$startMonth, "startYear" => $startYear, "endMonth" => $endMonth, "endYear" => $endYear, "emailForeign" => $email);	
		$this->otherStuInfo->insertStuDetails($educationDetailsArray);
		$eduDetailsArray = json_encode($this->getEducationDetails());
		echo $eduDetailsArray;	

	}

	public function addExpDetails()
	{
		$designation = $this->input->post('designation');
		$companyName = $this->input->post('Cname');
		$expStartDate = $this->input->post('expStartDate');
		$expEndDate = $this->input->post('expEndDate');
		$email = $this->session->userdata("emailSession");

		$ExpDetailsArray = array("exp_email" => $email,"exp_designation" => $designation, "exp_companyName" => $companyName, "exp_expStartDate" => $expStartDate, "exp_expEndDate" =>$expEndDate);	
			

		$this->otherStuInfo->insertExpDetails($ExpDetailsArray);
		$expDetailsArray = json_encode($this->getallexp());
		echo $expDetailsArray;	

	}

	public function addProjectDetails()
	{

		$email = $this->session->userdata("emailSession");
		$project_name = $this->input->post('projectName');
		$project_technology = $this->input->post('technology');
		$project_type = $this->input->post('type');
		$project_client = $this->input->post('cName');
		$project_start = $this->input->post('startDate');
		$project_end = $this->input->post('endDate');
		$project_status = $this->input->post('status');
		

		$id = $this->otherStuInfo->getID($email);

		//$res = $id['id'];

		$projectDetailsArray = array("stud_id" => $id, "project_name" => $project_name, "project_technology" => $project_technology, "project_type" => $project_type, "project_client" =>$project_client, "project_start" => $project_start, "project_end" => $project_end, "project_status" => $project_status);	

		//$resultDate = $startDate . '-' . $endDate;
			
		$this->otherStuInfo->insertProjectDetails($projectDetailsArray);
		$proDetailsArray = json_encode($this->getProjectDetails());
		echo $proDetailsArray;	

	}


	public function deleteEducationDetails(){

		$idii = $_POST["id"];
		$email = $this->session->userdata("emailSession");
		$this->otherStuInfo->deleteEduDetails($email,$idii);
		$this->getalledu();

	}

	public function deleteExpDetails(){

		$idii = $_POST["id"];
		$email = $this->session->userdata("emailSession");
		$this->otherStuInfo->DeleteExpDetails($email,$idii);
		$this->getallexp();

	}

	public function deleteProjectDetails(){

		$idii = $_POST["id"];
		$email = $this->session->userdata("emailSession");
		$this->otherStuInfo->deleteProDetails($email,$idii);
		$this->getallpro();

	}
	public function getalledu()
	{
		$sub = array();
		$data = array();
		$email = $this->session->userdata("emailSession");
		$output = $this->otherStuInfo->getAllEdu($email);
		if($output->num_rows() > 0)
		{
			$result = $output->result();
			foreach($result as $row){
			$sub['ID'] = $row->ID;
			$sub['email'] = $row->emailForeign;
			$sub['degree'] = $row->degree;
			$sub['specialize'] = $row->specialize;
			$sub['university'] = $row->university;
			$sub['startMonth'] = $row->startMonth;
			$sub['startYear'] = $row->startYear;
			$sub['endMonth'] = $row->endMonth;
			$sub['endYear'] = $row->endYear;
			$data[] = $sub;
			}
		}
		$dt = json_encode($data);
		return $dt;

	}

	public function getallexp()
	{
		$sub = array();
		$data = array();
		$email = $this->session->userdata("emailSession");
		$output = $this->otherStuInfo->getAllExp($email);
		if($output->num_rows() > 0)
		{
			$result = $output->result();
			foreach($result as $row){
			$sub['exp_id'] = $row->exp_id;
			$sub['exp_email'] = $row->exp_email;
			$sub['exp_designation'] = $row->exp_designation;
			$sub['exp_companyName'] = $row->exp_companyName;
			$sub['exp_expStartDate'] = $row->exp_expStartDate;
			$sub['exp_expEndDate'] = $row->exp_expEndDate;
			$data[] = $sub;
			}
		}
		$edt = json_encode($data);
		/*echo "<script>location.reload();</script>";*/
		return $edt;



	}

	public function getallpro()
	{
		$sub = array();
		$data = array();
		$email = $this->session->userdata("emailSession");
		$output = $this->otherStuInfo->getAllPro($email);
		if($output->num_rows() > 0)
		{
			$result = $output->result();
			foreach($result as $row){
			$sub['project_id'] = $row->project_id;
			$sub['project_name'] = $row->project_name;
			$sub['project_technology'] = $row->project_technology;
			$sub['project_type'] = $row->project_type;
			$sub['project_client'] = $row->project_client;
			$sub['project_start'] = $row->project_start;
			$sub['project_end'] = $row->project_end;
			$sub['project_status'] = $row->project_status;
			$data[] = $sub;
			}
		}
		$dte = json_encode($data);
		return $dte;



	}

	public function getEducationDetails()
	{
		$email = $this->session->userdata("emailSession");
		// $query = $this->db->get_where('educationdetailstable', array("emailForeign" => $email, "ID" => MAX("ID")));
		// Select ID FROM educationdetailstable where emailForeign = 'shubham.muniyal@somaiya.edusssssdsdfddfssf' and ID in (SELECT MAX(ID) FROM educationdetailstable)
		$query = $this->db->query('select * from educationdetailstable where emailForeign="'.$email.'" and ID in (SELECT MAX(ID) FROM educationdetailstable)');
		if($query->num_rows() > 0)
		{
			$eduDetailsArray = array();
			$iter = 0;
			// foreach ($query->row_array() as $row)
			// {
				$row = $query->row_array();
				$iter++;
				$eduDetailsArray[$iter] = array("ID" => $row["ID"], "degree" => $row["degree"], "specialize" => $row["specialize"], "university" => $row["university"], "startMonth" => $row["startMonth"], "startYear" => $row["startYear"], "endMonth" => $row["endMonth"], "endYear" => $row["endYear"]);

			// }
			// echo "<script language=\"javascript\">alert($eduDetailsArray[0]['ID']);</script>";

			return $eduDetailsArray;
			// $row = $query->row_array();
			// $detailsArray = array("firstName" => $row["firstName"], "lastName" => $row["lastName"], "middleName" => $row["middleName"], "email" => $row["email"], "interest" => $row["interest"], "bio" => $row["bio"], "profilePicture" => $row["profilePicture"]);
		}
	}


	public function getProjectDetails()
	{
		$email = $this->session->userdata("emailSession");

		$id = $this->otherStuInfo->getID($email);
		
		$query = $this->db->query('select * from project where project_id="'.$id.'"');
		if($query->num_rows() > 0)
		{
			$proDetailsArray = array();
			$iter = 0;
			
				$row = $query->row_array();
				$iter++;
				$proDetailsArray[$iter] = array("stud_id" => $row["stud_id"], "project_name" => $row["project_name"],"project_technology" => $row["project_technology"], "project_type" => $row["project_type"], "project_client" => $row["project_client"], "project_start" => $row["project_start"], "project_end" => $row["project_end"], "project_status" => $row["project_status"]);

			

			return $proDetailsArray;
			
		}
	}


	public function getExpDetails()
	{
		$email = $this->session->userdata("emailSession");

		//$id = $this->otherStuInfo->getIDExp($email);
		
		$query = $this->db->query('select * from exp where exp_id="'.$id.'"');
		if($query->num_rows() > 0)
		{
			$proDetailsArray = array();
			$iter = 0;
			
				$row = $query->row_array();
				$iter++;
				$expDetailsArray[$iter] = array("exp_email" => $email,"exp_designation" => $designation, "exp_companyName" => $companyName, "exp_expStartDate" => $expStartDate, "exp_expEndDate" =>$expEndDate);	

			

			return $expDetailsArray;
			
		}
	}
	public function studentLogout()
	{
		$this->chatDetails->deleteLoginDetailsOnLogout();
		$this->session->sess_destroy();
		redirect(base_url());
	}

public function editEducationDetails(){

	$id = $this->input->post('id');

	$result = $this->otherStuInfo->EditEducationDetails($id);
	$sub = array();
	foreach($result as $row)
	{
			$sub['ID'] = $row->ID;
			$sub['email'] = $row->emailForeign;
			$sub['degree'] = $row->degree;
			$sub['specialize'] = $row->specialize;
			$sub['university'] = $row->university;
			$sub['startMonth'] = $row->startMonth;
			$sub['startYear'] = $row->startYear;
			$sub['endMonth'] = $row->endMonth;
			$sub['endYear'] = $row->endYear;
	}
		echo json_encode($sub);
	}


	public function editProjectDetails(){

	$id = $this->input->post('id');

	$result = $this->otherStuInfo->EditProjectDetails($id);
	$sub = array();
	foreach($result as $row)
	{
			$sub['id'] = $row->project_id;
			$sub['project_name'] = $row->project_name;
			$sub['technology'] = $row->project_technology;
			$sub['type'] = $row->project_type;
			$sub['client'] = $row->project_client;
			$sub['start'] = $row->project_start;
			$sub['end'] = $row->project_end;
			$sub['status'] = $row->project_status;
	}
		echo json_encode($sub);
	}


	public function editExpDetails(){

	$id = $this->input->post('id');

	$result = $this->otherStuInfo->EditExpDetails($id);
	$sub = array();
	foreach($result as $row)
	{
			$sub['exp_id'] = $row->exp_id;
			$sub['exp_email'] = $row->exp_email;
			$sub['exp_designation'] = $row->exp_designation;
			$sub['exp_companyName'] = $row->exp_companyName;
			$sub['exp_expStartDate'] = $row->exp_expStartDate;
			$sub['exp_expEndDate'] = $row->exp_expEndDate;
	}
		echo json_encode($sub);
	}


public function editEduDB(){

		$email = $this->session->userdata("emailSession");
		$id = $this->input->post('id');
		$degree = $this->input->post('degree');
		$specialize = $this->input->post('specialize');
		$university = $this->input->post('university');
		$startMonth = $this->input->post('startMonth');
		$startYear = $this->input->post('startYear');
		$endMonth = $this->input->post('endMonth');
		$endYear = $this->input->post('endYear');
		

		$editEducationArray = array("emailForeign" => $email,"degree" => $degree, "specialize" => $specialize, "university" => $university, "startMonth" =>$startMonth, "startYear" => $startYear, "endMonth" => $endMonth, "endYear" => $endYear);	
		$res = $this->otherStuInfo->updateEduDetails($editEducationArray,$id,$email);

		$this->getalledu();
		

}


public function editExpDB(){

		$email = $this->session->userdata("emailSession");
		$id = $this->input->post('id');
		
		$designation = $this->input->post('designation');
		$companyName = $this->input->post('Cname');
		$expStartDate = $this->input->post('expStartDate');
		$expEndDate = $this->input->post('expEndDate');
		$email = $this->session->userdata("emailSession");

		$ExpDetailsArray = array("exp_email" => $email,"exp_designation" => $designation, "exp_companyName" => $companyName, "exp_expStartDate" => $expStartDate, "exp_expEndDate" =>$expEndDate);	
		
		$res = $this->otherStuInfo->updateExpDetails($ExpDetailsArray,$id,$email);

		$this->getallexp();
		

}

public function editProDB(){

		$email = $this->session->userdata("emailSession");
		$id = $this->input->post('id');
		$project_name = $this->input->post('projectName');
		$technology = $this->input->post('technology');
		$type = $this->input->post('type');
		$client = $this->input->post('client');
		$start = $this->input->post('editStartDate');
		$end = $this->input->post('editEndDate');
		$status = $this->input->post('status');

		//$id = $this->otherStuInfo->getID($email);

		$editProjectArray = array("project_name" =>  $project_name, "project_technology" => $technology, "project_type" => $type, "project_client" =>$client, "project_start" => $start, "project_end" => $end, "project_status" => $status);	
		$res = $this->otherStuInfo->updateProDetails($editProjectArray,$id,$email);
		echo $res;

		//$this->getallpro();
		

}
}