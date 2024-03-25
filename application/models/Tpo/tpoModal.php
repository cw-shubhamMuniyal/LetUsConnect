<?php
class tpoModal extends CI_Model{
    var $table = 'files';
    var $select_column = array("id","name","created_at","updated_at","shared");
    var $order_column = array("id","name","created_at","updated_at");
    public function companyCheck()
    {
        $query = $this->db->query("select * from company where deleted=0");
        if($query->num_rows() > 0)
        {
            return $query;
        }
        return false;
    }
    public function companyGet($all)
    {
        $query = $this->db->query("select * from company where company_name LIKE  '".$all."%' and deleted=0 order by id DESC");
        return $query;
    }
    public function companySet($name)
    {
        $msg = array();
        if($name!='')
        {
            $name = strtolower($name);
            $check = $this->db->query("select * from company where company_name LIKE('".$name."') and deleted=0");
            if($check->num_rows() == 0)
            {
                // $table_row_count = $this->db->count_all('company');
                // $id = $table_row_count + 1;
                $sql = "Insert INTO company (company_name,deleted) VALUES (?,?)";
                $query = $this->db->query($sql,array($name,0));
                if($query)
                {
                    $msg['insert'] = 'success';
                    $msg['check'] = 'noDuplicate';
                    $msg['name'] = 'notEmpty';
                    $tablename = "registered_".$name;
                    $sql2 = "create table".$tablename." (
                        `id` int(11) PRIMARY KEY AUTO_INCREMENT,
                        `roll_no` int(11) DEFAULT NULL,
                        `stud_name` varchar(255) NOT NULL,
                        `dept` varchar(255) NOT NULL,
                        `course` varchar(255) NOT NULL,
                        `deleted` int(11) DEFAULT '0',
                        `placed` varchar(11) DEFAULT 'unplaced',
                        `reason` varchar(255) DEFAULT 'none',
                        `cgpi` float DEFAULT '0',
                        `email` varchar(255) DEFAULT ''
                      )";
                    $query2=$this->db->query($sql2);
                }
                else{
                    $msg['insert'] = 'unsucccess';
                    $msg['check'] = 'noDuplicate';
                    $msg['name'] = 'notEmpty';
                }
            }
            else{
                $msg['insert'] = 'notfired';
                $msg['check'] = 'duplicate';
                $msg['name'] = 'notEmpty';

            }
        }
        else{
            $msg['insert'] = 'notfired';
            $msg['check'] = 'notfired';
            $msg['name'] = 'empty';
        }
        return $msg;
    }
    public function Checking($name)
    {
        //$query = $this->db->query("select * from company_d where id IN(select id from company where company_name='".$name."' and deleted=0)");
        $this->db->select('id')->from('company')->where('company_name',$name)->where('deleted',0);
        $sub_query = $this->db->get_compiled_select();
        $query=$this->db->select('*')->from('company_d')->where("id IN($sub_query)",NULL,FALSE)->get();
        //print_r($query);
        return $query;

    }
    public function SendCompanyDetail($name,$data,$attach)
    {
        $query = $this->db->query("Insert INTO company_d (id,detail,attach,deleted) select id,'".$data."','".$attach."',0 from company where company_name='".$name."'");
        if($this->db->affected_rows() == 1)
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function MailList($pg,$cd,$name)
    {
        $mailList = array();
        $status = $this->input->POST('status');
        $cgpi =  $this->input->POST('cgpi');
        // echo $status."\n".$cgpi;
        // exit;
        if($status=='non-dream')
        {
            // $this->db->select('id')->from('company')->where('company_name',$name)->where('deleted',0);
            //     $sub_query = $this->db->get_compiled_select();
            //     $query1=$this->db->select('*')->from('mail_list')->where("company_id IN($sub_query)",NULL,FALSE)->get();
            // $placed = array(0,1);
            // $this->db->select('roll_no')->from('student_placement')->where('status','none')->where_in('placed',$placed)->where('batch','2019-2020');
            // $sub_query = $this->db->get_compiled_select();
            // $query = $this->db->select('*')->from('student_grade')->where('cgpi >=',$cgpi)->where_in('department',$cd)->where_in('program',$pg)->where("roll_no IN($sub_query)",NULL,FALSE)->get();
            $query = $this->db->query("select email  from student_grade where cgpi_odd >=".$cgpi." and department IN(".$cd.") and program IN(".$pg.") and roll_no IN(select roll_no from student_placement where status IN('none') and placed IN(0,1) and batch='2019-2020')");
        }
        //company status dream  so the mail will be sent to those who has not yet been placed till no and also the non-dreamer's
        else if($status=='dream')
        {
            // $placed = array(0,1);
            // $st = array('none','non-dream');
            // $this->db->select('roll_no')->from('student_placement')->where_in('status',$st)->where_in('placed',$placed)->where('batch','2019-2020');
            // $sub_query = $this->db->get_compiled_select();
            // $query = $this->db->select('*')->from('student_grade')->where('cgpi >=',$cgpi)->where_in('department',$cd)->where_in('program',$pg)->where("roll_no IN($sub_query)",NULL,FALSE)->get();
            $query = $this->db->query("select email  from student_grade where cgpi_odd >=".$cgpi." and department IN(".$cd.") and program IN(".$pg.") and roll_no IN(select roll_no from student_placement where status IN('none','non-dream') and placed IN(0,1) and batch='2019-2020')");
        }
        //company status super-dream  so the mail will be sent to those who has not yet been placed till no and also for the non-dreamr's and dreamr's
        else if($status=='super-dream')
        {
            // $placed = array(0,1);
            // $st = array('none','non-dream','dream');
            // $this->db->select('roll_no')->from('student_placement')->where_in('status',$st)->where_in('placed',$placed)->where('batch','2019-2020');
            // $sub_query = $this->db->get_compiled_select();
            // $query = $this->db->select('*')->from('student_grade')->where('cgpi >=',$cgpi)->where_in('department',$cd)->where_in('program',$pg)->where("roll_no IN($sub_query)",NULL,FALSE)->get();
            $query = $this->db->query("select email  from student_grade where cgpi_odd >=".$cgpi." and department IN(".$cd.") and program IN(".$pg.") and roll_no IN(select roll_no from student_placement where status IN('none','non-dream','dream') and placed IN(0,1) and batch='2019-2020')");
        }
        //company status dream and non-dream  so the mail will be sent to those who has not yet been placed till no, and also for non-dreamer's
        else
        {
            // $placed = array(0,1);
            // $st = array('none','non-dream');
            // $this->db->select('roll_no')->from('student_placement')->where_in('status',$st)->where_in('placed',$placed)->where('batch','2019-2020');
            // $sub_query = $this->db->get_compiled_select();
            // $query = $this->db->select('*')->from('student_grade')->where('cgpi >=',$cgpi)->where_in('department',$cd)->where_in('program',$pg)->where("roll_no IN($sub_query)",NULL,FALSE)->get();
            $query = $this->db->query("select email  from student_grade where cgpi_odd >=".$cgpi." and department IN(".$cd.") and program IN(".$pg.") and roll_no IN(select roll_no from student_placement where status IN('none','non-dream') and placed IN(0) and batch='2019-2020')");
        }
        if($query->num_rows() > 0)
        {       
                $k=0;
                foreach($query->result() as $row)
                {
                    $mailList[$k] = $row->email;
                    $k++;
                }
                // echo  sizeof($mailList);
                // exit;
                $k=0;
                //$mail = implode(',',$mailList);
                $this->db->select('id')->from('company')->where('company_name',$name)->where('deleted',0);
                $sub_query = $this->db->get_compiled_select();
                $query1=$this->db->select('*')->from('mail_list')->where("company_id IN($sub_query)",NULL,FALSE)->get();
                if($query1->num_rows() == 0)
                {
                    $query2 = $this->db->query("insert into mail_list (company_id,emails) select id,'".implode(',',$mailList)."' from company where company_name='".$name."' and deleted=0");
                    if($this->db->affected_rows() == 1)
                    {
                        return $mailList;
                    }
                }
                return $mailList;
                
        }
    }
    public function GetAnnounce($name){
        $this->db->select('id')->from('company')->where('company_name',$name)->where('deleted',0);
        $sub_query = $this->db->get_compiled_select();
        $query=$this->db->select('*')->from('announcement')->where("company_id IN($sub_query)",NULL,FALSE)->get();
        return $query;
    }
    public function insertAnnounce($msg,$files,$name)
    {
        $this->db->select('id')->from('company')->where('company_name',$name)->where('deleted',0);
        $sub_query = $this->db->get_compiled_select();
        $query=$this->db->select('COUNT(a_no) AS no')->from('announcement')->where("company_id IN($sub_query)",NULL,FALSE)->get()->result();
        $a_no = $query[0]->no + 1;
        // print_r($a_no);
        // exit;

        $query1 = $this->db->query("insert into announcement(company_id,announce,a_no,attach) select id,'".$msg."',".$a_no.",'".$files."' from company where company_name='".$name."' and deleted=0"); 
        

        $query2 = $this->db->select('emails')->from('mail_list')->where("company_id IN($sub_query)",NULL,FALSE)->get()->result();
        
        return $query2[0]->emails;
    
    }
    public function uploadFiles($name,$file_name)
    {
        $check = $this->db->query("Select name from files where name='".$file_name."'");
        if($check->num_rows() > 0)
        {
            return "File already exists";
        }
        else{
            $query = $this->db->query("Insert into files(company_id,name) select id,'".$file_name."' from company where company_name='".$name."' and deleted=0");    
            if($this->db->affected_rows() == 1){
                return"success";
            }
            else{
                return "unsuccess";
            }
        }
        
    }
    /*Code of TPO data table*/
    function get_id()
    {
        $name = $this->input->post('name');
        $c_id;
        $query =$this->db->query("select id from company where company_name='".$name."' and deleted=0");
        if($query->num_rows() == 1)
        {
            foreach($query->result() as $row)
            {
                $c_id = $row->id;
            }
        } 
        return $c_id;
    }
    function make_query()
    { 
        $c_id = $this->get_id();
        // echo $c_id;
        // exit;
        $this->db->select($this->select_column);
        $this->db->from($this->table);
        $this->db->where('deleted = 0 and company_id='.$c_id);
        // $this->db->order_by('id','DESC');
        // $rows = $this->db->get()->result();
        // echo json_encode($rows);
        //exit;
        if(isset($_POST['search']['value']))
        {
            $this->db->like("name",$_POST['search']['value']);
            //$this->db->or_like("created_at",$_POST['search']['value']);
            //$this->db->or_like("updated_at",$_POST['search']['value']);
        }
        if(isset($_POST['order']))
        {
            $this->db->order_by($this->order_column[$_POST['order'][0]['column']], $_POST['order'][0]['dir']);
        }
        else{
            $this->db->order_by('id',"DESC");
        }
    }
    function make_datatables()
    {
        $this->make_query();
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
    function get_filtered_data()
    {
        $this->make_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function get_all_data(){
        $c_id = $this->get_id();
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where('deleted = 0 and company_id='.$c_id);
        return $this->db->count_all_results();
    }
    /*End of code for TPO data table */

    function getFiles()
    {
        $data = $this->input->post('deldata');
        $this->db->select('name');
        $this->db->where_in('id',$data);
        $this->db->from('files');
        $query = $this->db->get();
        return $query->result();

    }
    function deleteFiles()
    {
        $data = $this->input->post('deldata');
        $this->db->where_in('id',$data);
        $this->db->delete('files');
        if($this->db->affected_rows() > 0)
        {
            return "success";
        }
        else{
            return "unsuccess";
        }
    }
    function shareFiles()
    {
        $id = $this->input->post('share');
        $data = array(
            "shared" => 1
        );
        $this->db->where("id",$id);
        $this->db->update("files",$data);
        if($this->db->affected_rows() == 1)
        {
            return "success";
        }
        else{
            return "unsuccess";
        }
    }
   
}