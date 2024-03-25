<?php
class alumniEditDetails extends CI_Model{

    //used to get the login credentials and set the session
    public function insertEditDetails($data, $email){
    
        $this->db->where('email', $email);
        $this->db->update('alumnitable', $data);
    }
}