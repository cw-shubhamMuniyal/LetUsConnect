<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tpoDashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->logggedIn();
		$this->load->model('Tpo/tpoModal','tpo');
		
	}
	private function logggedIn()
	{
		if(!$this->session->userdata('authenticated') && ($this->session->userdata('role') != 1))
		{
			redirect(base_url());
		}
	}
	public function index()
	{
		$this->load->view('tpo/companyList');
	}
	public function checkCompany()
	{
		$data = array();
		$check = $this->input->post('checking');
		if($check)
		{
			$user = $this->tpo->companyCheck();
			if($user)
			{
				$data['msg'] =  'success';
			}
			else{
				$data['msg'] = 'error';
			}
		}
		else{
			$data['msg'] = 'error';
		}
		//print_r($data);
		echo json_encode($data);
	}
	public function getCompany()
	{
		$output = '';
		$card = $this->input->POST('card');
		$all = $this->input->POST('all');
		$request = $this->input->POST('request');
		if($card)
		{
			$query = $this->tpo->companyGet($all);
			if($query->num_rows() > 0){
				foreach($query->result() as $row)
				{
					$foo = $row->company_name;
					$k = array();
					$i=0;
					$pieces = explode(" ", $foo);
					foreach($pieces as $one)
					{
						$k[$i] = ucfirst($one);
						$i++;
					}
					$imp = implode(" ", $k);
					if($request == 'owner')
					{
						$output .= '<div class="panel widget">'.
						       '<div class="panel-heading vd_bg-red">'.
					           '<h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-th-large"></i></span>'. $imp .'</h3>'.
					           '<div class="vd_panel-menu">'.
					           '<div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon "> <i class="fa fa-minus"></i></div>'.
					          '<div  data-action="close"  data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon "> <i class="fa fa-times" aria-hidden="true"></i> </div>'.
					          '</div><!-- vd_panel-menu -->'.
				              '</div><a href="company?name='. $row->company_name  .'"> Click Here <i class="fa  fa-angle-double-right"> </i></a>'.
							'</div>';
					}
					else
					{
						$output .= '<div class="panel widget">'.
									'<div class="panel-heading vd_bg-red ">'.
										'<h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-briefcase"></i> </span> <a href="officeCompany?name='. $row->company_name .'">'.$imp.'</a></h3>'.
										'<div class="vd_panel-menu">'.
										'<!-- <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="fa fa-minus"></i> </div> -->'.
										'</div><!-- vd_panel-menu --> '.
									'</div>'.
								'</div><!-- .vd_container -->';
					}
					
				}	
			}
			else{
				$output .= '<p class="text-muted">No record found</p>';
			}
			print_r($output);
			//return $output;
		}
	}
	public function setCompany()
	{
		$msg = array();
		$name = $this->security->xss_clean(html_escape($this->input->post('companyName')));
		$result = $this->tpo->companySet($name);
		if($result['insert']=='success' && $result['check']=='noDuplicate' && $result['name']=='notEmpty')
		{
			$msg['success'] = 'allClear';
		}
		else if($result['insert']=='unsuccess' && $result['check']=='noDuplicate' && $result['name']=='notEmpty')
		{
			$msg['success'] = 'insertFail';
		}
		else if($result['insert']=='notfired' && $result['check']=='duplicate' && $result['name']=='notEmpty')
		{
			$msg['success'] = 'duplicate';
		}
		else
		{
			$msg['success'] = 'noName';
		}
		echo json_encode($msg);
	}
}
?>