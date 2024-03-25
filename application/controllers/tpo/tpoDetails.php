<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tpoDetails extends CI_Controller {
	private $mail;
	function __construct(){
		parent::__construct();
		$this->logggedIn();
		$this->load->model('Tpo/tpoModal','tpo');
		$this->load->library('phpmailer_lib');
				$this->mail = $this->phpmailer_lib->load();
				$this->mail->isSMTP();                                            
				$this->mail->Host       = 'smtp.gmail.com';                    
				$this->mail->SMTPAuth   = true;                                   
				$this->mail->Username   = 'gaurav.hiran@somaiya.edu';                    
				$this->mail->Password   = 'geograph@123';                               
				$this->mail->SMTPSecure = 'ssl';         
				$this->mail->Port       = 465;                                   
				$this->mail->setFrom('gaurav.hiran@somaiya.edu', 'CPP_Testing');
		
	}
	private function logggedIn()
	{
		if(!$this->session->userdata('authenticated') && ($this->session->userdata('role') != 1))
		{
			redirect(base_url());
		}
	}
	public function index()
	{
		$this->load->view('tpo/companyDetail');
	}
	public function check()
	{
		$data = array();
		$pass = $this->input->POST('checkCompany');
		//print_r($pass);
		if($pass){
			$name = $this->input->POST('name');
			$result = $this->tpo->Checking($name);
			//print_r($result->result());
			if($result->num_rows() == 1){
				$data = $result->result();
				$data = array_merge($data,array("msg"=>"success"));		
			}
			else{
				$data = array("msg"=>"Duplicate");
			}
		}
		else{
			$data = array("msg"=>"No check");
		}
		echo json_encode($data);

	}
	public function sendCompanyDetail()
	{
		$msg = array();
		$create = $this->input->POST('create');
		if($create)
		{

					$data = array();
					$files = array();
					$k=1;
					$name = $this->input->POST('name');
					$dir_name = 'uploaded/'.$name;
					if(!is_dir($dir_name)){
						mkdir($dir_name);
					}
								//print_r($create);

							/* ref_no doa doc policy salary escription address  placement_for eligible branches register  ldr selection dop tor vtr isiting count_visiting cp p_for_kjsit place_location nstruction*/
							$data['ref_no'] = stripslashes($this->input->POST('ref_no'));
							$data['doa'] = stripslashes($this->input->POST('doa'));
							$data['doc'] = stripslashes($this->input->POST('doc'));
							$data['noc'] = str_replace("\r\n","</br>",$this->input->POST('noc'));
							$data['policy'] = stripslashes($this->input->POST('policy'));
							$data['salary'] = str_replace("\r\n","</br>",$this->input->POST('salary'));
							$data['description'] = str_replace("\r\n","</br>",$this->input->POST('description'));
							$data['address'] = str_replace("\r\n","</br>",$this->input->POST('address'));
							$data['placement_for'] = stripslashes($this->input->POST('placement_for'));
							$data['eligible'] = str_replace("\r\n","</br>",$this->input->POST('eligible'));
							$data['branches'] = stripslashes($this->input->POST('branches'));
							$data['register'] = str_replace("\r\n","</br>",$this->input->POST('register'));
							$data['ldr'] = stripslashes($this->input->POST('ldr'));
							$data['selection'] = str_replace("\r\n","</br>",$this->input->POST('selection'));
							$data['dop'] = stripslashes($this->input->POST('dop'));
							$data['tor'] = stripslashes($this->input->POST('tor'));
							$data['vtr'] = stripslashes($this->input->POST('vtr'));
							$data['visiting'] = stripslashes($this->input->POST('visiting'));
							$data['count_visiting'] = stripslashes($this->input->POST('count_visiting'));
							$data['cp'] = stripslashes($this->input->POST('cp'));
							$data['p_for_kjscit'] = stripslashes($this->input->POST('p_for_kjsit'));
							$data['place_location'] = stripslashes($this->input->POST('place_location'));
							$data['instruction'] = str_replace("\r\n","</br>",$this->input->POST('instruction'));
							//echo $_POST['instruction'];
							$json_type = json_encode($data);
							//print_r("Ya input data done");

							
							// var_dump(count($_FILES['attach']['name']));
							
								
										//print_r("Entered File code");
										// // Looping all files
										for($i=0 ; $i < count($_FILES['attach']['name']); $i++ ){
											// var_dump($i);
											if(!empty($_FILES['attach']['name'][$i])){
													//print_r("looping File code");
												// Define new $_FILES array - $_FILES['file']
												$_FILES['file']['name'] = $_FILES['attach']['name'][$i];
												
												$_FILES['file']['type'] = $_FILES['attach']['type'][$i];
												$_FILES['file']['tmp_name'] = $_FILES['attach']['tmp_name'][$i];
												$_FILES['file']['error'] = $_FILES['attach']['error'][$i];
												$_FILES['file']['size'] = $_FILES['attach']['size'][$i];
												
												// Set preference
												$config['upload_path'] = $dir_name.'/';
												$config['allowed_types'] = 'jpg|jpeg|png|ppt|pptx|xls|xlsx|doc|docx|pdf';
												$config['file_name'] = $_FILES['attach']['name'][$i];
										
												//Initializing the  upload library
												$this->upload->initialize($config); 
										
													// File upload
													if($this->upload->do_upload('file')){
														// Get data about the file
														$uploadData = $this->upload->data();
														$filename = $uploadData['file_name'];
														// Initialize array
														$files[$k] = $filename;
														$k++;
													}
											}
										}
						
							
								$file_attachments = (string)json_encode($files);


								
								$query = $this->tpo->SendCompanyDetail($name,$json_type,$file_attachments);
					
								if($query)
								{
									$msg['success'] = 'success';
									
								}
								else{
									$msg['success'] = 'unsuccess';
									
								}
		}
		else{
			$msg['success'] = 'No create proper way';
		}
		echo json_encode($msg);
		//exit;
	}
	public function mailList(){
		$msg = array();
		$check = $this->input->POST('send_mail');
		if($check)
		{
			$name = $this->input->POST('name');
			$commanDept = array();
			$program = array();
			$n=0;
			$k=0;
			//print_r("send mail");
			$ug = $this->input->POST('UG');
			$pg = $this->input->POST('PG');
			if(count($ug) > 0)
			{
					$program[$n]='UG';
					$n++;
					for($i=0;$i<count($ug);$i++)
					{
						$commanDept[$k] = $ug[$i];
						$k++;
					}
					if(!empty($pg))
					{
						$program[$n]='PG';
						for($i=0;$i<count($pg);$i++)
						{
							if(!in_array($pg[$i],$commanDept,true))
							{
								$commanDept[$k] = $pg[$i];
								$k++;
							}
						}
					}
			}
			$pg = "'" . implode ( "', '", $program ) . "'";
			$cd = "'" . implode ( "', '", $commanDept ) . "'";
			//echo $pg."\n".$cd;

			$mail_list = $this->tpo->MailList($pg,$cd,$name);
			if(!empty($mail_list))
			{
				// print_r(implode(',',$mail_list));
				// exit;
				$company;$attach;
				$query = $this->tpo->Checking($name);
				if($query->num_rows() == 1)
				{
					foreach($query->result() as $row)
					{
						$company = json_decode($row->detail);
						$attach = json_decode($row->attach,1);
					}
					$result = $this->mailDetails($company,$attach,$mail_list,$name);
					$msg['success'] = $result;

				}
			}	
		}
		echo json_encode($msg);
	}
	private function mailDetails($company,$attach,$email,$name)
	{
		$cc = array("smeet.panchal@somaiya.edu","shubham.muniyal@somaiya.edu","kunal.durgani@somaiya.edu");
		$data1 = array();
		$data2 = array();
		$counter=1;
		$j=0;
		$msg = "false";
		try
		{	
			for($i=0;$i<sizeof($email);$i++)
			{
				//$this->mail->addAddress($email[$i]);
			}
			for($i=0;$i<sizeof($cc);$i++)
			{
				$this->mail->addCC($cc[$i]);
			}
			if(count($attach) != 0)
			{
				foreach ($attach as $key => $value) 
				{
					$this->mail->addAttachment("uploaded/".$name."/".$value);         // Add attachments
				}
			}
			$this->mail->isHTML(true);                                  // Set email format to HTML
						// $this->mail->Subject = $name;
			$this->mail->Subject = 'Testing';
			$this->mail->Body = "We are currently testing for our final year project, Sorry for inconvenience, Please dont block us.";
			if($this->mail->send()){	
				$msg = "true";
			}
			else{
				$msg = "false";
			}
			$this->mail->ClearAddresses();  // each AddAddress add to list
			$this->mail->ClearCCs();
			return $msg;
		}
		catch (Exception $e) 
		{
				//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		
	


		// for($k=0;$k<$counter;$k++)
		// {	
		// 	try 
		// 	{
					
		// 			for($i=$j;$i<sizeof($email);$i++)
		// 			{
		// 				if($j==0)
		// 				{
		// 					if($i < 499)
		// 					{
		// 						$this->mail->addAddress($email[$i]);     // Add a recipient
		// 						//$data1[] = $email[$i];
		// 					}
		// 					else{
		// 						$j = $i;
		// 						break;
		// 					}
		// 				}
		// 				else{
		// 					$this->mail->addAddress($email[$i]);
		// 					//$data2[] = $email[$i];
		// 				}
						
						
		// 			}
					
		// 			for($i=0;$i<sizeof($cc);$i++)
		// 			{
		// 				$this->mail->addCC($cc[$i]);
		// 			}
					
					
					
		// 			if(count($attach) != 0)
		// 			{
		// 				foreach ($attach as $key => $value) 
		// 				{
		// 					$this->mail->addAttachment("uploaded/".$name."/".$value);         // Add attachments
		// 				}
		// 			}
					
					
					
		// 			$this->mail->isHTML(true);                                  // Set email format to HTML
		// 			// $this->mail->Subject = $name;
		// 			$this->mail->Subject = 'Testing';
		// 			$companyDetailTable = '<!DOCTYPE html>
		// 									<html lang="en">
		// 									<head>
		// 									<title>Bootstrap Example</title>
		// 									<style>
		// 										.mine
		// 										{
		// 											width: 450.65pt; 
		// 										}
		// 										table {
		// 									border-collapse: collapse;
		// 									}
		
		// 									table, tr, td {
		// 									border: 1px solid black;
		// 									}
		// 									</style>
		// 									<meta charset="utf-8">
		// 									<meta name="viewport" content="width=device-width, initial-scale=1">
		// 									<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		// 									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		// 									<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		// 									</head>
		// 									<body>
		
		// 									<div class="container">
		// 									<h2  class="text-danger">Testing Purpose Only....</h2>
		// 									<table class="table table-bordered">
		// 										<tbody>     
		// 											<tr class="active">
		// 												<td>Ref No.</td>
		// 												<td class="mine">'.$company->ref_no.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Date of Announcement</td>
		// 												<td class="mine">'.$company->doa.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Date of Campus Placement</td>
		// 												<td class="mine">'.$company->doc.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Name of the Companys</td>
		// 												<td class="mine">'.$company->noc.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Type of company as per KJSCE placement policy</td>
		// 												<td class="mine">'.$company->policy.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Salary pm/pa</td>
		// 												<td class="mine">'.$company->salary.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Brief Job Description (JD) :</td>
		// 												<td class="mine">'.$company->description.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Address of corporate office of company</td>
		// 												<td class="mine">'.$company->address.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Placement for UG/PG/UG and PG both</td>
		// 												<td class="mine">'.$company->placement_for.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Eligibility: CGPI / Live KT criteria etc</td>
		// 												<td class="mine">'.$company->eligible.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Branches eligible to apply :</td>
		// 												<td class="mine">'.$company->branches.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Google Link to register</td>
		// 												<td class="mine">'.$company->register.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Last date to register</td>
		// 												<td class="mine">'.$company->ldr.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Mode of selection</td>
		// 												<td class="mine">'.$company->selection.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Date of PPT / Test / Interview</td>
		// 												<td class="mine">'.$company->dop.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Time to report for written test / campus placement</td>
		// 												<td class="mine">'.$company->tor.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Venue to report</td>
		// 												<td class="mine">'.$company->vtr.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Is the company visiting for the first time? Yes/No</td>
		// 												<td class="mine">'.$company->visiting.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>If No, then details of past how many times visited in past for campus placement at KJSCE</td>
		// 												<td class="mine">'.$company->count_visiting.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Is it a campus placement or Pool Campus placement?</td>
		// 												<td class="mine">'.$company->cp.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Is it a campus placement for KJSIT also? Yes/No</td>
		// 												<td class="mine">'.$company->p_for_kjscit.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Location of Placement / Venue of Training of Selected students</td>
		// 												<td class="mine">'.$company->place_location.'</td>
		// 											</tr>
		// 											<tr class="active">
		// 												<td>Any specific Instructions</td>
		// 												<td class="mine">'.$company->instruction.'</td>
		// 											</tr>
		// 										</tbody>
		// 									</table>
		// 									</div>
		// 									</body>
		// 									</html>';
		// 				$this->mail->Body = "We are currently testing for our final year project, Sorry for inconvenience, Please dont block us.";
		// 				if(!$this->mail->send())
		// 				{	
		// 					$msg = false;
		// 				}
		// 				else
		// 				{
		// 					$msg = true;
		// 				}
		// 				$this->mail->ClearAddresses();  // each AddAddress add to list
		// 				$this->mail->ClearCCs();
		// 	}
		// 	catch (Exception $e) 
		// 	{
		// 		//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		// 	}
		// 	if($j!=0)
		// 	{
		// 		$counter = 2;
		// 	}
		// }
		// // $data['data1'] = $data1;
		// // $data['data2'] = $data2;
		// // $data['sizeofData1'] = sizeof($data1);
		// // $data['sizeofData2'] = sizeof($data2);
		// // $data['totalMailList'] = sizeof($email);
		// // echo json_encode($data);
		//return $msg;
	}
	public function getAnnounce()
	{
		$announce = $this->input->POST('announce');
		if($announce){
			$data = array();
			$datas = array();
			$name = $this->input->POST('name');
			$query = $this->tpo->GetAnnounce($name);
			// print_r($query);
			// exit;
			if($query->num_rows() > 0)
			{
				foreach($query->result() as $row)
				{
					$data['announce'] = $row->announce;
					$data['a_no'] = $row->a_no;
					$data['attach'] = $row->attach;
					$datas[] = $data;
				}
			}

		}else{


		}
		echo json_encode($datas);
	}
	public function sendAnnounce()
	{
		$dd = array();
		$check = $this->input->POST("create_announce");
		if($check)
		{
					$files = array();
					$k=1;
					$msg = $this->input->POST('msg');
					$name =$this->input->POST('name');
					if(!empty($_FILES['a_files'])){
						//print_r("Entered File code \n");
						// //Looping all files
						for($i=0 ; $i < count($_FILES['a_files']['name']); $i++ ){
					
							if(!empty($_FILES['a_files']['name'][$i])){
							//print_r("looping File code \n");
							// Define new $_FILES array - $_FILES['file']
							$_FILES['file']['name'] = $_FILES['a_files']['name'][$i];
							
							$_FILES['file']['type'] = $_FILES['a_files']['type'][$i];
							$_FILES['file']['tmp_name'] = $_FILES['a_files']['tmp_name'][$i];
							$_FILES['file']['error'] = $_FILES['a_files']['error'][$i];
							$_FILES['file']['size'] = $_FILES['a_files']['size'][$i];
							
							// Set preference
							$config['upload_path'] = 'uploaded/'.$name.'/'; 
							$config['allowed_types'] = 'jpg|jpeg|png|ppt|pptx|xls|xlsx|doc|docx|pdf';
							$config['file_name'] = $_FILES['a_files']['name'][$i];
							$config['overwrite'] = true;
							//Initializing the  upload library
							$this->upload->initialize($config); 
					
								// File upload
								if($this->upload->do_upload('file')){
									// Get data about the file
									$uploadData = $this->upload->data();
									$filename = $uploadData['file_name'];
									// Initialize array
									$files[$k] = $filename;
									$k++;
								}
							}
						}
					}
					//print_r("Exiting the file code \n");
					//exit;
					$file_attachments = (string)json_encode($files);
					$query = $this->tpo->insertAnnounce($msg,$file_attachments,$name);
					$mail_list = explode(',',$query);
					// print_r(gettype($mail_list));
					// exit;
					$result = $this->sendMailAnnounce($msg,$name,$mail_list,$files);
					if($result)
					{
						$dd['success'] = "true";
					}
					else{
						$dd['success']= "false";
					}
					// print_r($query);
					// exit;

		}
		else{
			
		}
		echo json_encode($dd);
	}
	private function sendMailAnnounce($announce,$name,$mail_list,$attach)
	{
			try 
			{
						$msg=false;
						for($i=0;$i<count($mail_list);$i++)
						{
							$this->mail->addAddress($mail_list[$i]);     // Add a recipient
						}
						$this->mail->addReplyTo('gaurav.hiran@somaiya.edu','tpo_engg');
						$this->mail->addCC('');
						
						if(count($attach) != 0)
						{
							foreach ($attach as $key => $value) 
							{
								$this->mail->addAttachment("uploaded/".$value);         // Add attachments
							}
						}
						$this->mail->isHTML(true);                                  // Set email format to HTML
						$this->mail->Subject = $name;
						$this->mail->Body = $announce;
						
						//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
						if(!$this->mail->send()){
								//print_r('Could not send mail');
								//print_r($this->mail->ErrorInfo);	
								$msg = false;
						}
						else{
								//print_r('Mail sent');
								$msg = true;
						}
						$this->mail->ClearAddresses();  // each AddAddress add to list
						$this->mail->ClearCCs();
						$this->mail->ClearReplyTos(); 
						return $msg;
						//$mail->ClearBCCs();
			}
			catch (Exception $e) 
			{
					//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
	}
	public function fileUpload()
	{
		$upload = $this->input->post('upload');
		if($upload){
			$name = $this->input->post('name');
			$filename = $this->input->post('attachFile');
			$dir = 'uploaded/'.$name.'/sharedFiles';
			if(!is_dir($dir)){
					mkdir($dir);
			}
				$config['upload_path']  =  $dir;
				$config['allowed_types']  = 'csv|pdf|xls|xlsx';
				$this->upload->initialize($config);
				if ($this->upload->do_upload('attachFile'))
				{
					$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
					$file_name = $upload_data['file_name'];
					$path = $upload_data['full_path'];
					chmod($path,0777);
				}
				$result = $this->tpo->uploadFiles($name,$file_name);
				if($result == "success")
				{
					echo "Success";
				}
				else{
					echo "Unsuccess";
				}
		}
	}
	public function  getFiles()
	{
		$request = $this->input->POST('request');
		$name = $this->input->POST('name');
		if($request)
		{
			$fetch_data = $this->tpo->make_datatables();
			$data = array();
			$i=0;
			foreach($fetch_data as $rows){
				// $data = array(
				// "id" => ++$i,
				// "name" => $rows->name,
				// "doc" => $rows->created_at,
				// "dou" => $rows->updated_at,
				// "dl" => '<a href="uploaded/'.$name.'/sharedFiles/'.$rows->name.'">Download</a>',
				// "share" => "<input type='checkbox' class='share_check' id='sharecheck_".$rows->id."' onclick='sharecheckbox();' value='".$rows->id."'>",
				// "delete" => "<input type='checkbox' class='delete_check' id='delcheck_".$rows->id."' onclick='checkcheckbox();' value='".$rows->id."'>"
				// );
				$sub_array = array();
				$sub_array['sr_no'] = ++$i;
				$sub_array['file_name'] = $rows->name;
				$sub_array['doc'] = $rows->created_at;
				$sub_array['dou'] = $rows->updated_at;
				$sub_array['dl'] = '';
				if($rows->shared==0)
				{
					$sub_array['share'] = "<button class='sharebutton btn btn-warning btn-group-sm' id='share_".$rows->id."' value='".$rows->id."'>Share</button>";
				}
				else{
					$sub_array['share'] = "<label class='text-success'>Shared</label>";
				}
				
				$sub_array['delete'] = "<input type='checkbox' class='delete_check' id='delcheck_".$rows->id."' onclick='deletecheckbox();' value='".$rows->id."'>";
				$data[] = $sub_array;
			}
			// echo json_encode($data);
			// exit;
			$output = array(
				"draw" => intval($_POST['draw']),
				"recordsTotal" => $this->tpo->get_all_data(),
				"recordsFiltered" => $this->tpo->get_filtered_data(),
				"data" => $data
			);
			echo json_encode($output);
		}
	}

	public function deleteFile()
	{
		if($_POST['request']==2)
		{
			$name = $this->input->post('name');
			$filename = $this->tpo->getFiles();
			foreach($filename as $file)
			{
				$path = APPPATH.'../uploaded/'.$name.'/sharedFiles/'.$file->name;
				if(is_file($path))
				{
					unlink($path);
				}
			}
			$result = $this->tpo->deleteFiles();
			echo json_encode($result);
		}
		
	}
	public function shareFile()
	{
		if($_POST['request']==3)
		{
			$result = $this->tpo->shareFiles();
		}
		echo json_encode($result);
	}


	/*Code to force download */
	// public function downloadfile()
	// {
	// 	$check = $this->input->post('download');
	// 	$filename = $this->input->post('value');
	// 	$name = $this->input->post('name');
	// 	$path = 'uploaded/'.$name.'/sharedFiles/'.$filename;
	// 	if($check)
	// 	{
	// 			// $data = file_get_contents($path);
	// 			// force_download($filename,$data);
	// 			if(is_file($path))
	// 			{
	// 				// required for IE
	// 				if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off'); }

	// 				$mime = get_mime_by_extension($path);

	// 				// Build the headers to push out the file properly.
	// 				header('Pragma: public');     // required
	// 				header('Expires: 0');         // no cache
	// 				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	// 				header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($path)).' GMT');
	// 				header('Cache-Control: private',false);
	// 				header('Content-Type: '.$mime);  // Add the mime type from Code igniter.
	// 				header('Content-Disposition: attachment; filename="'.basename($filename).'"');  // Add the file name
	// 				header('Content-Transfer-Encoding: binary');
	// 				header('Content-Length: '.filesize($path)); // provide file size
	// 				header('Connection: close');
	// 				readfile($path); // push it out
	// 				exit();
	// 			}
	// 	} 
	// } //End force_download

}
?>