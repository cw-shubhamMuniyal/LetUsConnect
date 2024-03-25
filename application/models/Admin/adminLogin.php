<?php
class adminLogin extends CI_Model{

    //used to get the login credentials and set the session
    public function login($email,$password){
        $query = $this->db->query('select email, password, role from users_admin where email="'.$email.'"');
        if($query->num_rows() == 1)
        {
            $row = $query->row_array();
            if(password_verify($password,$row['password']))
            {
                return $query->row();
            }
            else
            {
                return false;
            }
            
        }
        return false;
    }
    public function forgotPassword_emailChecking($email)
    {
        $result = array();
        $query = $this->db->query('Select email from users_admin where email="'.$email.'"');
        if($query->num_rows() == 1)
        {
            $result['success'] = 'true';
            $code = $this->resetCode($email);
            $result['code'] = $code;
            return $result;
            print_r("done with function one");
        }
        else{
            $result['success'] = 'false';
            $result['code'] = '';
            return $result;
        }
    }
    public function resetCode($email)
    {
        $code = uniqid();
        $sql = "Insert INTO ua_reset_code (email,code) VALUES (?,?)";
        $query = $this->db->query($sql,array($email,$code));
        if($query)
        {
            return $code;
        }
        else{
            return '';
        }
    }
    public function checkCode($code)
    {
        $query = $this->db->query('select email from ua_reset_code where code="'.$code.'"');
        if($query->num_rows() == 1)
        {
            return $query->row();
        }
        return false;
    }
    public function resetPassword($email,$password)
    {
        $hashpass = password_hash($password, PASSWORD_BCRYPT);
        $data = [
            'password' => $hashpass,
        ];
        $this->db->where('email', $email);
        $this->db->update('users_admin', $data);
        if($this->db->affected_rows() == 1)
        {
            print_r('record updated');
            $this->db->where('email', $email);
            $this->db->delete('ua_reset_code');
            if($this->db->affected_rows() == 1)
            {
                print_r('code deleted');
                return true;
            }
            else
            {
                print_r('code not deleted');
                return true; 
            }
        }
        else
        {
            print_r('record not updated');
            return false;
        }
    }
}