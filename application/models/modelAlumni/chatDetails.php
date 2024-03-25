<?php
class chatDetails extends CI_Model{

    //used to get the login credentials and set the session
    public function insertLoginDetails($data){
        $this->db->insert('alumnilogintable', $data);
    }

    public function getsearchMatchEmail($search){
        $query = $this->db->query('select email, profilePicture from alumnitable where email like "%'.$search.'%"');
        $row = $query->result_array();
        return $row;
    }

    public function getLoginDetails($data){
        $query = $this->db->query('select * from alumnilogintable where username="'.$data["email"].'"');
        $row = $query->row_array();
        if($query->num_rows() == 1)
        {
            return $row["user_id"];
        }
    }

    public function addFriendsDB($data){
        // It will give user_id of friend
        $query = $this->db->query('select user_id from alumnilogintable where username = "'.$data['emailIDFriend'].'"');
        $row = $query->row_array();
        $user_idFriend = $row["user_id"];
        // updating friends column by adding friends
        $query = $this->db->query("select friends from alumnilogintable where user_id = '".$_SESSION["user_id"]."'");
        $row = $query->row_array();
        if($row["friends"] == NULL){
            $this->db->query("update alumnilogintable set friends = '".$user_idFriend ."'where user_id = '".$_SESSION['user_id']."'");
        }
        else{
            $existingFriends = $row["friends"].",".$user_idFriend;
            $this->db->query("update alumnilogintable set friends = '".$existingFriends ."'where user_id = '".$_SESSION['user_id']."'");
        }
    }

    public function getUserId($data){
        // $connect = new PDO("mysql:host=localhost;dbname=cpp", "root", "");
        // $sub_query = "
        //             INSERT INTO login_details 
        //             (user_id) 
        //             VALUES ('".$user_id."')
        //             ";
        //     $statement = $connect->prepare($sub_query);
        //     $statement->execute();
        $this->db->insert('login_details', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function getOthersChatDetails($user_id){
        // This function is used to get friends  email IDs
        $query = $this->db->query("select friends from alumnilogintable where user_id = '".$user_id."'");
        $row = $query->row_array();
        $friendsArray = explode(",",$row["friends"]);
        for($i=0;$i<count($friendsArray);$i++){
            $friendsArray[$i] = (int)$friendsArray[$i];
        }
        // $query = $this->db->query('select * from alumnilogintable where user_id != "'.$_SESSION['user_id'].'"');
        $ids = join(",",$friendsArray);
        $friendsArray = $ids;
        $query = $this->db->query('select * from alumnilogintable where user_id IN ('.$friendsArray.')');
        // $query = $this->db->query('select * from alumnilogintable where user_id IN (9,4)');
        $row = $query->result_array();
        return $row;
    }

    public function updateUserActivity(){
        $queryUpdate = "
        UPDATE login_details 
        SET last_activity = now() 
        WHERE login_details_id = '".$_SESSION["login_details_id"]."'
        ";
        $this->db->query($queryUpdate);

    }

    public function insertChatQuery($data){
        // $queryInsert = "
        // INSERT INTO chat_message 
        // (to_user_id, from_user_id, chat_message, status) 
        // VALUES (:to_user_id, :from_user_id, :chat_message, :status)
        // ";
        $this->db->insert("chat_message", $data);

    }

    public function fetchChatHistoryQuery($from_user_id, $to_user_id){
        $querySelect = "
        SELECT * FROM chat_message 
        WHERE (from_user_id = '".$from_user_id."' 
        AND to_user_id = '".$to_user_id."') 
        OR (from_user_id = '".$to_user_id."' 
        AND to_user_id = '".$from_user_id."') 
        ORDER BY timestamp DESC
        ";
        $query = $this->db->query($querySelect);
        $result = $query->result_array();
        return $result;
    }

    public function getUserNameQuery($user_id){
        $querySelect = " 
        SELECT username FROM alumnilogintable WHERE user_id = '$user_id'
        ";
        $query = $this->db->query($querySelect);
        $result = $query->result_array();
        return $result;
    }

    public function deleteLoginDetailsOnLogout(){
        $query = "
        DELETE from login_details where user_id = '".$_SESSION["user_id"]."'
        ";
        $this->db->query($query);
    }

}