<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class page extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		//$this->load->helper('url');
	}
	
	public function UserAgreement($msg = NULL){
		// Load our view to be displayed
		// to the user
		//$this->load->helper('url');

		
			$data['msg'] = $msg;
			$data['heading'] = "User Agreement";
			$this->load->view('common/header',$data);
			$this->load->view('UserAgreeView/UserAgree_View', $data);
		
		$this->load->view('common/footer1',$data);
	}

	public function countrylisting(){
		$data['msg'] = $msg;
            $data['heading'] = "User Agreement";
            $this->load->view('common/header',$data);
            $this->load->view('Country_View/country_View', $data);
        
        $this->load->view('common/footer1',$data);
	}
	
	public function page1(){

		$data['msg'] = $msg;
            $data['heading'] = "User Agreement";
            $this->load->view('common/header',$data);
            $this->load->view('Country_View/country_View', $data);
        
        $this->load->view('common/footer1',$data);
	}

	public function page3(){

		$data['msg'] = $msg;
            $data['heading'] = "User Agreement";
            $this->load->view('common/header',$data);
            $this->load->view('Country_View/country_View', $data);
        
        $this->load->view('common/footer1',$data);
	}

	public function page5(){

		$data['msg'] = $msg;
            $data['heading'] = "User Agreement";
            $this->load->view('common/header',$data);
            $this->load->view('Country_View/country_View', $data);
        
        $this->load->view('common/footer1',$data);
	}

	public function page6(){

		$data['msg'] = $msg;
            $data['heading'] = "User Agreement";
            $this->load->view('common/header',$data);
            $this->load->view('Country_View/country_View', $data);
        
        $this->load->view('common/footer1',$data);
	}

	public function page2(){

		$data['msg'] = $msg;
            $data['heading'] = "User Agreement";
            $this->load->view('common/header',$data);
            $this->load->view('Country_View/country_View', $data);
        
        $this->load->view('common/footer1',$data);
	}
	/*public function process(){
		// Load the model
		$this->load->model('login_model');
		// Validate the user can login
		$result = $this->login_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			redirect('common/settings','refresh');
		}		
	}*/
	/*public function do_logout(){
		$this->session->sess_destroy();
		redirect('login/login','refresh');
	}*/
}
?>