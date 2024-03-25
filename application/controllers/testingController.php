<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testingController extends CI_Controller {
    public function index()
	{
		$this->load->view('testingView');
    }
    public function sendMail()
    {
       // print_r("hello");
       $this->load->library('encryption');
        //echo "Entered the code";
        $config = array(
            'protocol' => 'smtp', 
            'smtp_host' => 'ssl://smtp.gmail.com', 
            'smtp_port' => 465, 
            'smtp_user' => 'cpp.tpo@gmail.com', 
            'smtp_pass' => 'cpptpo@123', 
            'mailtype' => 'html', 
            'charset' => 'iso-8859-1'
            );
            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");
            
            //Email content
            $htmlContent = '<html lang="en">
            <head>
              <title>Bootstrap Example</title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            </head>
            <body>
            
            <div class="container">
              <h2></h2>
              <div class="row">
                <div class="col-sm-6">
                    <table class="table table-bordered">
                <tbody>     
                    <tr class="active">
                        <td style="width: 212.65pt">Ref No.</td>
                        <td>.</td>
                    </tr>
                    <tr class="active">
                        <td>Date of Announcement</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Date of Campus Placement</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Name of the Companys</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Type of company as per <br>KJSCE placement policy</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Salary pm/pa</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td class="">Brief Job Description (JD) :</td>
                        <td align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</td>
                    </tr>
                    <tr class="active">
                        <td>Address of corporate <br>office of company</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Placement for UG/PG/both</td>
                        <td></td>
                    </tr>
                    <tr class="active" align="justify">
                        <td>Eligibility: <br>CGPI / Live KT criteria etc</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</td>
                    </tr>
                    <tr class="active">
                        <td>Branches eligible to apply :</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Google Link to register</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Last date to register</td>
                        <td></td>
                    </tr>
                    <tr class="active" align="justify">
                        <td>Mode of selection</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</td>
                    </tr>
                    <tr class="active" align="justify">
                        <td>Date of <br>PPT / Test / Interview</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</td>
                    </tr>
                    <tr class="active" align="justify">
                        <td>Time to report for<br> written test / campus placement</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</td>
                    </tr>
                    <tr class="active">
                        <td>Venue to report</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Is the company visiting<br> for the first time? Yes/No</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>If No, then details of past<br> how many times visited in <br> past for campus placement <br> at KJSCE</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Is it a campus placement <br>or Pool Campus placement?</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Is it a campus placement <br> for KJSIT also? Yes/No</td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td>Location of Placement / Venue <br>of Training of Selected students</td>
                        <td></td>
                    </tr>
                    <tr class="active" align="justify">
                        <td>Any specific Instructions</td>
                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</td>
                    </tr>
                    
                  
                </tbody>
              </table>
                </div>
              </div>
            </div>
            
            </body>
            </html>';
            
            $this->email->to('gaurav.hiran@somaiya.edu');
            $this->email->from('cpp.tpo@gmail.com','tpo engg');
            $this->email->subject('Table Testing');
            $this->email->attach(base_url()."uploaded/bling.jpg");
            $this->email->message($htmlContent);
            
            //Send email
            if( ! $this->email->send())
            {
                print_r("Error while sending the mail");
            }
            else{
                print_r("Mail sent");
            }
    }
}
