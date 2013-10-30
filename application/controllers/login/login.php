<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
			$data['msg'] = $msg;
		   	$data['heading'] = "page 6";
            $data['css1'] = "p1";
			$data['css2'] = "page6";
			$data['css3'] = "StyleSheet1";
            $this->load->view('common/header',$data);
            $this->load->view('page6/page6', $data);
        
        $this->load->view('common/footer2',$data);
	}
	
	public function process(){
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
			redirect('common/page/home','refresh');
		}		
	}
	public function do_logout(){
		$this->session->sess_destroy();
		redirect('register/register/page1','refresh');
	}


}


?>