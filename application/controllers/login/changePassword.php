<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class changePassword extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Admin/adminLogin','admin');
	}
	public function index()
	{
		$this->load->view('login/forgotPassword');
	}
	public function forgotPassword()
	{
		$msg = array();
		$email = $this->security->xss_clean(html_escape($this->input->get('email')));
		$user = $this->admin->forgotPassword_emailChecking($email);
		if($user['success']=='true' && !empty($user['code']))
		{
				//print_r($user);
				$msg['success'] = 'true';
				$reset = $user['code'];
				$this->load->library('phpmailer_lib');
				$mail = $this->phpmailer_lib->load();
				$mail->isSMTP();                                            
				$mail->Host       = 'smtp.gmail.com';                    
				$mail->SMTPAuth   = true;                                   
				$mail->Username   = 'cpp.kjsce@gmail.com';                    
				$mail->Password   = '@123CPP.KJSCE';                               
				$mail->SMTPSecure = 'ssl';         
				$mail->Port       = 465;                                   
				$mail->setFrom('cpp.kjsce@gmail.com', 'CPP_KJSCE');
				$mail->addAddress($email);
				$mail->addReplyTo('no-reply@gmail.com','No reply');
				$mail->Subject='Password Reset';
				$mail->isHTML(true);
				$url = base_url().'resetlink?code='.$reset;
				$mailContent = "<h1>You requested password  reset</h1>
								Click <a href='".$url."'>this link</a> to do so";
				$mail->Body = $mailContent;
				if(!$mail->send())
				{
					//print_r('Could not send mail');
					print_r($mail->ErrorInfo);	
					$msg['mail_sent'] = 'false';
				}
				else
				{
					//print_r('Mail sent');
					$msg['mail_sent'] = 'true';
				}
				echo json_encode($msg);
		}
		else
		{
			$msg['success'] = 'false';
			$msg['mail_sent'] = 'true';
			echo json_encode($msg);
		}
		//print_r($user);
		//print_r($msg);
		//exit;
	
	}
}
?>