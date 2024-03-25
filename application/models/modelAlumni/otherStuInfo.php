<?php
class otherStuInfo extends CI_Model{

	// get all friends details
	public function getFriendsDetails($data){
		if(!empty($data)){
			$emailIDs = join(",",$data);
			$query = $this->db->query('select * from alumnitable where email IN ('.$emailIDs.')');
			$row = $query->result_array();
			return $row;
		}
	}

	// get single friend details 
    public function getFriendDetails($data){
		if(!empty($data)){
			$query = $this->db->query('select * from alumnitable where email = "'.$data.'"');
			$row = $query->result_array();
			return $row;
		}
    }

    //used to get the login credentials and set the session
    public function insertStuDetails($data){
        $this->db->insert('educationdetailstable', $data);
    }

    public function insertExpDetails($data){
        $this->db->insert('exp', $data);
    }

    public function insertProjectDetails($data){
        $this->db->insert('project', $data);
    }

     public function getStuDetails($email){

        $query = $this->db->query('select * from educationdetailstable where emailForeign="'.$email.'"');
        
        return $query->result_array();
    }

    /*public function getStudentDetails($email){

    	//$result = getID($email);
        $query = $this->db->query('select * from project where email="'.$email.'"');
        
        return $query->result_array();
    }*/

    public function getAllPro($email)
    {
    	$result = $this->getID($email);
    	$query = $this->db->query("Select * from project where stud_id ='".$result."'");
 
    		return $query;
    	
    }

     public function getAllExp($email)
    {
    	//$result = $this->getIDExp($email);
    	//echo $result;
    	$query = $this->db->query("Select * from exp where exp_email ='".$email."'");
 		// echo $query->num_rows();
 		// exit;
    	return $query;
    	
    }

    /*public function getIDExp($email){
    	$id=0;
    	$query = $this->db->query("select exp_id from exp where exp_email='".$email."'");
    	if($query->num_rows() == 1)
    	{
    		$result = $query->result();
    		foreach($result as $row)
    		{
    			$id = $row->exp_id;
    		} 
    	
    	}
    	echo $id;
    	exit;
    	
    	return $id;

    	// $id = $result['id'];

    	// return $id;
    }
*/
    public function getID($email){
    	$id=0;
    	$query = $this->db->query('select id from alumnitable where email="'.$email.'"');
    	if($query->num_rows() == 1)
    	{
    		$result = $query->result();
    		foreach($result as $row)
    		{
    			$id = $row->id; 
    		}
    	}
    	return $id;

    	// $id = $result['id'];

    	// return $id;
    }

    public function deleteEduDetails($email,$id){

    	 $query = $this->db->query('Delete from educationdetailstable where emailForeign="'.$email.'" and ID = "'.$id.'" '); 

    }
    public function DeleteExpDetails($email,$id){

    	 $query = $this->db->query('Delete from exp where exp_email="'.$email.'" and exp_id = "'.$id.'" '); 

    }
    public function deleteProDetails($email,$id){

    	 $query = $this->db->query('Delete from project where project_id = "'.$id.'" '); 

    }
    
    public function getAllEdu($email)
    {
    	$query = $this->db->query("Select * from educationdetailstable where emailForeign ='".$email."'");
 
    		return $query;
    	
    }

    public function EditEducationDetails($id){


    	$query = $this->db->query("select * from educationdetailstable where ID =".$id);
    	if($query->num_rows() > 0)
    	{
    		$result = $query->result();
    		return $result;
    	}
    }

    public function EditExpDetails($id){


    	$query = $this->db->query("select * from exp where exp_id =".$id);
    	if($query->num_rows() > 0)
    	{
    		$result = $query->result();
    		return $result;
    	}
    }

    public function EditProjectDetails($id){


    	$query = $this->db->query("select * from project where project_id =".$id);
    	if($query->num_rows() > 0)
    	{
    		$result = $query->result();
    		return $result;
    	}
    }

    public function updateEduDetails($data,$id,$email){

    	/*$condition_array = array('ID' => $id,'emailForeign' => $email);
    	$this->db->where($condition_array);
    	$this->db->update('educationdetailstable',$data);*/

    	$this->db->where('ID', $id);
        $this->db->update('educationdetailstable', $data);
    	/*$query=$this->db->query("update educationdetailstable SET emailForeign='$email',degree='$degree',specialize='$specialize',university='$university',startMonth='$startMonth',startYear='$startYear',endMonth='$endMonth',endYear='$endYear' where ID='".$id."' and emailForeign= '".$email."' ");*/
    	if($this->db->affected_rows() == 1){
    		return 1;	
    	}else{
    		return 0;
    	}
    	

    }

    public function updateExpDetails($data,$id,$email){

    	/*$condition_array = array('ID' => $id,'emailForeign' => $email);
    	$this->db->where($condition_array);
    	$this->db->update('educationdetailstable',$data);*/

    	$this->db->where('exp_id', $id);
        $this->db->update('exp', $data);
    	/*$query=$this->db->query("update educationdetailstable SET emailForeign='$email',degree='$degree',specialize='$specialize',university='$university',startMonth='$startMonth',startYear='$startYear',endMonth='$endMonth',endYear='$endYear' where ID='".$id."' and emailForeign= '".$email."' ");*/
    	if($this->db->affected_rows() == 1){
    		return 1;	
    	}else{
    		return 0;
    	}
    	

    }

    public function updateProDetails($data,$id,$email){

    	/*$condition_array = array('ID' => $id,'emailForeign' => $email);
    	$this->db->where($condition_array);
    	$this->db->update('educationdetailstable',$data);*/

    	$this->db->where('project_id', $id);
        $this->db->update('project', $data);
    	/*$query=$this->db->query("update educationdetailstable SET emailForeign='$email',degree='$degree',specialize='$specialize',university='$university',startMonth='$startMonth',startYear='$startYear',endMonth='$endMonth',endYear='$endYear' where ID='".$id."' and emailForeign= '".$email."' ");*/
    	// if($this->db->affected_rows() == 1){
    	// 	return 1;	
    	// }else{
    	// 	return 0;
    	// }
    	echo $this->db->affected_rows();
    	

    }
}

