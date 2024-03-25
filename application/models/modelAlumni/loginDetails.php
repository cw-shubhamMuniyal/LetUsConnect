<?php
class loginDetails extends CI_Model{

    //used to get the login credentials and set the session
    public function getLoginDetails($data)
    {
        // $query = $this->db->get_where('alumnitable', "shubham.muniyal@somaiya.edusssssdsdfddfsdssfsdf");
        $query = $this->db->query('select * from alumnitable where email="'.$data["email"].'"');

        if($query->num_rows() == 1)
        {
            $row = $query->row_array();
            if($row["password"] == $data["password"])
            {
                return true;
            }
            else if($row["password"] != $data["password"])
            {
                return false;
            }
         }
    }

     public function getRole($data)
    {
        // $query = $this->db->get_where('alumnitable', "shubham.muniyal@somaiya.edusssssdsdfddfsdssfsdf");
        $query = $this->db->query('select role from alumnitable where email="'.$data["email"].'"');

        if($query->num_rows() == 1)
        {
            $row = $query->row_array();
        
            return $row['role'];
         }
    }

    public function getUserDetails($email)
    {
        $query = $this->db->query('select * from alumnitable where email="'.$email.'"');
        if($query->num_rows() == 1)
        {
            $row = $query->row_array();
			$detailsArray = array("firstName" => $row["firstName"], "lastName" => $row["lastName"], "middleName" => $row["middleName"], "email" => $row["email"], "interest" => $row["interest"], "bio" => $row["bio"], "profilePicture" => $row["profilePicture"], "role" => $row["role"]);
            return $detailsArray;
        }         
    }

    public function getUserProfilePicture($email)
    {
        $query = $this->db->query('select profilePicture from alumnitable where email="'.$email.'"');
        if($query->num_rows() == 1)
        {
            $row = $query->row_array();
            return $row["profilePicture"];
        }
        
    }

    public function getEducationDetails($email)
	{
		$query = $this->db->get_where('educationdetailstable', array("emailForeign" => $email));
		if($query->num_rows() > 0)
		{
			$eduDetailsArray = array();
			$iter = 0;
			foreach ($query->result_array() as $row)
			{
				$iter++;
				$eduDetailsArray[$iter] = array("ID" => $row["ID"], "degree" => $row["degree"], "specialize" => $row["specialize"], "university" => $row["university"], "startMonth" => $row["startMonth"], "startYear" => $row["startYear"], "endMonth" => $row["endMonth"], "endYear" => $row["endYear"]);

			}
			// echo "<script language=\"javascript\">alert($eduDetailsArray[0]['ID']);</script>";

			return $eduDetailsArray;
			// $row = $query->row_array();
			// $detailsArray = array("firstName" => $row["firstName"], "lastName" => $row["lastName"], "middleName" => $row["middleName"], "email" => $row["email"], "interest" => $row["interest"], "bio" => $row["bio"], "profilePicture" => $row["profilePicture"]);
		}
	}


    public function getProjectDetails($email)
    {
        $query = $this->db->get_where('project', array("email" => $email));
        if($query->num_rows() > 0)
        {
            $proDetailsArray = array();
            $iter = 0;
            foreach ($query->result_array() as $row)
            {
                $iter++;
                $proDetailsArray[$iter] = array("project_id" => $row["project_id"], "email" => $row["email"], "project_name" => $row["project_name"], "project_type" => $row["project_type"], "project_client" => $row["project_client"], "project_start" => $row["project_start"], "project_end" => $row["project_end"], "project_status" => $row["project_status"]);

            }
            // echo "<script language=\"javascript\">alert($eduDetailsArray[0]['ID']);</script>";

            return $proDetailsArray;
            // $row = $query->row_array();
            // $detailsArray = array("firstName" => $row["firstName"], "lastName" => $row["lastName"], "middleName" => $row["middleName"], "email" => $row["email"], "interest" => $row["interest"], "bio" => $row["bio"], "profilePicture" => $row["profilePicture"]);
        }
    }

}