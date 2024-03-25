<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class tpoOfficeCompany extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->logggedIn();
		$this->load->model('TpoOffice/tpoOfficeModal','office');
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
		$this->load->view('tpoOffice/OfficeCompany');
	}
	public function datatableLoad(){
		$request = $this->input->POST('request');
		$name = $this->input->POST('name');
		if($request)
		{
			$fetch_data = $this->office->make_datatable($name);
			$data = array();
			$i=0;
			foreach($fetch_data as $row){
				if($row->reason=='none')
				{
					$data[] = array(
						//"id"=>$row['id'],
						"roll_no"=>$row->roll_no,
						"stud_name"=>$row->stud_name,
						"dept"=>$row->dept,
						"course"=>$row->course,
						"reason"=>$row->reason,
						"action"=>"<input type='checkbox' class='delete_check' id='delcheck_".$row->id."' onclick='checkcheckbox();' 
						value='".$row->id."'>",
						"edit"=>"<input type='button' id='edit_record' class='btn btn-warning btn-sm b' value='Edit'  onclick='editRegStudent(".$row->id.")'>"
					);  
				}
				else
				{
					$data[] = array(
						//"id"=>"<lable class='text-danger'>".$row['id']."</lable>",
						"roll_no"=>"<lable class='text-danger'>".$row->roll_no."</lable>",
						"stud_name"=>"<lable class='text-danger'>".$row->stud_name."</lable>",
						"dept"=>"<lable class='text-danger'>".$row->dept."</lable>",
						"course"=>"<lable class='text-danger'>".$row->course."</lable>",
						"reason"=>"<lable class='text-danger'>".$row->reason."</lable>",
						"action"=>"<input type='checkbox' class='delete_check' id='delcheck_".$row->id."' onclick='checkcheckbox();' 
						value='".$row->id."'>",
						"edit"=>"<input type='button' id='edit_record' class='btn btn-warning btn-sm b' value='Edit'  onclick='editRegStudent(".$row->id.")'>"
					);
        		}
			}
			// echo json_encode($data);
			// exit;
			$output = array(
				"draw" => intval($_POST['draw']),
				"recordsTotal" => $this->office->get_all_data($name),
				"recordsFiltered" => $this->office->get_filtered_data($name),
				"data" => $data
			);
			echo json_encode($output);

		}
	}
	public function getRegData()
	{
		$request = $this->input->POST('check');
		$id = $this->input->POST('id');
		$name = $this->input->POST('name');
		$data = array();
		if($request=="getRegData")
		{
			$result = $this->office->GetRegData($name,$id);
			if($result->num_rows() == 1)
			{
				echo json_encode($result->row_array());	
			}
		}
	} 
	public function studentEdit(){
		$check = $this->input->POST('check');
		$name = $this->input->POST('name');
		$roll_no = $this->input->POST('roll_no');
		$stud_name = $this->input->POST('stud_name');
		$dept = $this->input->POST('dept');
		$course = $this->input->POST('course');
		$cgpi =$this->input->POST('cgpi');
		$email = $this->input->POST('email');
		$id = $this->input->POST('id');
		if($check == "editRegData")
		{ 
			$result =  $this->office->StudentEdit($name,$roll_no,$stud_name,$dept,$course,$cgpi,$email,$id);
		}
		echo json_encode($result);
	}
	public function deleteRecord(){
		$name = $this->input->POST('name');
		$check = $this->input->POST('request');
		$delete_array = $this->input->POST('deleteids_arr');
		$id = implode(',',$delete_array);
		//echo $id;
		if($check==2)
		{
			$result = $this->office->DeleteRecord($name,$delete_array);
		}
		echo json_encode($result);
	}
	public function Criteria()
	{
		$check = $this->input->POST('check');
		if($check == "criteria_file"){
			$filename="";
			$comman_department = array();
			$btech_dept = array();
			$checkfor = array();
			$mtech_dept = array();
			$program = array();
			$cgpi = $this->input->POST('cgpi');
			$UG = $this->input->POST('B_tech');
			$PG = $this->input->POST('M_tech');
			$blength = $this->input->POST('blength');
			$mlength = $this->input->POST('mlength');
			$status = $this->input->POST('status');
			$sem= $this->input->POST('sem');
			$n=0;
			$pass_out="";
			if($blength > 0)
			{
				$program[$n]='B.tech';
				if($mlength > 0)
				{
					$n++;
					$program[$n]='M.tech';
				}
			}
			$btech_dept = explode(',',$UG[0]);
			$checkfor = explode(',',$PG[0]);
			for($i=0;$i<count($checkfor);$i++)
			{
				if(!in_array($checkfor[$i],$btech_dept))
				{
					$mtech_dept[$i] = $checkfor[$i];
				}
			}


			$comman_department = array_merge($btech_dept,$mtech_dept);
			$pg = "'".implode("','" ,$program )."'";
			$cd =  "'".implode("','" ,$comman_department )."'";
			
			if($_POST['pass']=="Twelfth"){
				$pass_out=$_POST['pass'];
			}
			if($_POST['pass']=="Diploma"){
				$pass_out=$_POST['pass'];
			}
		
			$filename = explode(".", $_FILES['file']['name']);
			if($filename[1] == 'csv')
			{
				$handle = fopen($_FILES['file']['tmp_name'], "r");
				while($data = fgetcsv($handle))
				{
					$id = mysqli_real_escape_string($con, $data[0]);
					$roll_no = mysqli_real_escape_string($con, $data[1]);  
					$stud_name = mysqli_real_escape_string($con, $data[2]);
					$dept = mysqli_real_escape_string($con, $data[3]);  
					$course = mysqli_real_escape_string($con, $data[4]);
					//$deleted = mysqli_real_escape_string($con, $data[5]);  
					//$placed = mysqli_real_escape_string($con, $data[6]);
					//$reason = mysqli_real_escape_string($con, $data[7]);  
					$cgpi = mysqli_real_escape_string($con, $data[8]);  
					$email = mysqli_real_escape_string($con, $data[9]);  
					$result = $this->office->CSVUpload($id,$roll_no,$stud_name,$dept,$course,$cgpi,$email);
				}
			}
			
		}
	}
}