<?php 
class tpoOfficeModal extends CI_Model{
    /* Formation of datatable*/
    var $select_column = array("id","roll_no","stud_name","dept","course","reason");
    var $order_column = array("roll_no","stud_name","dept","course","reason");
    function make_query($name)
    { 
        $tablename = "registered_".$name;
        // echo $c_id;
        // exit;
        $this->db->select($this->select_column);
        $this->db->from($tablename);
        $this->db->where('deleted',0);
        // $this->db->order_by('id','DESC');
        // $rows = $this->db->get()->result();
        // echo json_encode($rows);
        //exit;
        if(isset($_POST['search']['value']))
        {
            $this->db->like("stud_name",$_POST['search']['value']);
            //$this->db->or_like("created_at",$_POST['search']['value']);
            //$this->db->or_like("updated_at",$_POST['search']['value']);
        }
        if(isset($_POST['order']))
        {
            $this->db->order_by($this->order_column[$_POST['order'][0]['column']], $_POST['order'][0]['dir']);
        }
        else{
            $this->db->order_by('reason',"ASC");
        }
    }
    function make_datatable($name)
    {
        $this->make_query($name);
        // echo json_encode($this->db->where('company_id', $this->get_id())->get()->result());
        // exit;
        if($_POST['length'] != -1)
        {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        // $row = $query->result();
        // echo json_encode($row);
        // exit;
        return $query->result();
    }
    function get_filtered_data($name)
    {      
        $this->make_query($name);
        $query = $this->db->get();
        return $query->num_rows();
    }
    function get_all_data($name){
        $table = "registered_".$name; 
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where('deleted',0);
        return $this->db->count_all_results();
    }
    /*End of code for TPO data table */

    function GetRegData($name,$id){
        $table = "registered_".$name;
        $sql = "select * from ".$table." where id=".$id;
        $query = $this->db->query("select * from ".$table." where id=".$id);
       return $query;
    }

    function StudentEdit($name,$roll_no,$stud_name,$dept,$course,$cgpi,$email,$id){
        $table = "registered_".$name; 
        $data = array(
            'roll_no' => $roll_no,
            'stud_name' => $stud_name,
            'dept' => $dept,
            'course' => $course,
            'email' => $email,
            'cgpi' => $cgpi            
            );
        $this->db->where('id', $id);
        $this->db->update($table,$data);
        if($this->db->affected_rows() == 1)
        {
            return "success"; 
        }
        else{
            return "unsuccess";
        }
    }
    function DeleteRecord($name,$id)
    {
        $table = "registered_".$name; 
        $data = array(
            'deleted' => 1,           
            );
        $this->db->where_in('id', $id);
        $this->db->update($table,$data);
        if($this->db->affected_rows() > 0)
        {
            return "success"; 
        }
        else{
            return "unsuccess";
        }
    }
    function CSVUpload($id,$roll_no,$stud_name,$dept,$course,$cgpi,$email){
        
    }
}
?>