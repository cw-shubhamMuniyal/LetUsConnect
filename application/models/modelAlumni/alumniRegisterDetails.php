<?php
class alumniRegisterDetails extends CI_Model{

    //used to get the login credentials and set the session
    public function insertRegisterDetails($data){
        $this->db->insert('alumnitable', $data);
    }
}