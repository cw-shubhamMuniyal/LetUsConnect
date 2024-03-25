<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fetchUser extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(!isset($_SESSION['emailSession']))
		{
			header('location:'.base_url());
		}
        $this->load->model('modelAlumni/chatDetails','chatDetails');
        date_default_timezone_set('Asia/Kolkata');
	}
	public function index()
	{
		
    }

    public function getOthersChats(){
        $result_array = $this->chatDetails->getOthersChatDetails($_SESSION["user_id"]);

        $output = '
        <table class="table table-bordered table-striped">
        <tr>
        <td>Username</td>
        <td>Status</td>
        <td>Action</td>
        </tr>
        ';

        foreach($result_array as $row)
        {
            $status = '';
            $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
            $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
            $user_last_activity = $this->fetch_user_last_activity($row["user_id"]);
            if($user_last_activity > $current_timestamp)
            {
                $status = '<span class="label label-success">Online</span>';
                // echo $current_timestamp." ".$user_last_activity;
            }
            else
            {
                $status = '<span class="label label-danger">Offline</span>';
            }
            $output .= '
            <tr>
            <td>'.$row["username"].'</td>
            <td>'.$status.'</td>
            <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row["user_id"].'" data-tousername="'.$row["username"].'">Start Chat</button></td>
            </tr>
            ';
        }

        $output .= "</table>"; 
        echo $output;
    }

    public function fetch_user_last_activity($user_id)
    {
        $connect = new PDO("mysql:host=localhost;dbname=cpp", "root", "");
        $query = "
        SELECT * FROM login_details 
        WHERE user_id = '$user_id' 
        ORDER BY last_activity DESC 
        LIMIT 1
        ";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
            return $row['last_activity'];
        }
    }

    public function update_last_activity(){
        $this->chatDetails->updateUserActivity();
    }

    public function insertChat(){
        $data = array(
            'to_user_id'  => $_POST['to_user_id'],
            'from_user_id'  => $_SESSION['user_id'],
            'chat_message'  => $_POST['chat_message'],
            'status'   => '1'
           );

        $this->chatDetails->insertChatQuery($data);
        echo $this->fetchUserChatHistory($_SESSION['user_id'], $_POST['to_user_id']);
    }

    public function fetchUserChatHistory($from_user_id, $to_user_id)
    {
        $result = $this->chatDetails->fetchChatHistoryQuery($from_user_id, $to_user_id);
        $output = '<ul class="list-unstyled">';
        foreach($result as $row)
        {
            $user_name = '';
            if($row["from_user_id"] == $from_user_id)
            {
                $user_name = '<b class="text-success">You</b>';
            }
            else
            {
                $user_name = '<b class="text-danger">'.$this->get_user_name($row['from_user_id']).'</b>';
            }
            $output .= '
            <li style="border-bottom:1px dotted #ccc">
            <p>'.$user_name.' - '.$row["chat_message"].'
                <div align="right">
                - <small><em>'.$row['timestamp'].'</em></small>
                </div>
            </p>
            </li>
            ';
        }
        $output .= '</ul>';

        // $query = "
        // UPDATE chat_message 
        // SET status = '0' 
        // WHERE from_user_id = '".$to_user_id."' 
        // AND to_user_id = '".$from_user_id."' 
        // AND status = '1'
        // ";
        // $statement = $connect->prepare($query);
        // $statement->execute();

        return $output;
    }

    public function fetchChatHistoryIntermediateFn(){
        $to_user_id = $_POST['to_user_id'];
        echo $this->fetchUserChatHistory($_SESSION['user_id'], $to_user_id);
    }


    public function get_user_name($user_id)
    {
        $result = $this->chatDetails->getUserNameQuery($user_id);
        foreach($result as $row)
        {
            return $row['username'];
        }
    }
}

?>