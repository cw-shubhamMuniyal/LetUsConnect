<?php
class project extends CI_Model{

    //used to get the login credentials and set the session
    public function onFetch($email){

        $stu_idArr = $this->db->query("select id from alumnitable where email = '$email';")->row_array();
        $stu_id = $stu_idArr["id"];

        $data = $this->db->query("select * from project where stud_id = '$stu_id';")->result_array();
        
        return $data;
          

    }

  

}