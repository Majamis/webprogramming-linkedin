<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class page extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		//$this->load->helper('url');
	}
	
	public function UserAgreement(){
		// Load our view to be displayed
		// to the user
		//$this->load->helper('url');

		
			
			$data['heading'] = "User Agreement";
			$data['css1'] = "p1";
			$data['css2'] = "StyleSheet1";
			$data['css3'] = "";
			$this->load->view('common/header',$data);
			//$this->load->view('common/mynav',$data);
			$this->load->view('UserAgreeView/UserAgree_View', $data);
		
		$this->load->view('common/footer1',$data);
	}

	public function countrylisting(){
		
            $data['heading'] = "Country Listing";
            $data['css1'] = "p1";
			$data['css2'] = "StyleSheet1";
			$data['css3'] = "";
            $this->load->view('common/header',$data);
            $this->load->view('common/mynav',$data);
			
            $this->load->view('Country_View/country_View', $data);
        
        $this->load->view('common/footer2',$data);
	}
	
	public function page1(){

		
            $data['heading'] = "Page 1";
            $data['css1'] = "StyleSheet1";
			$data['css2'] = "p1";
			$data['css3'] = "";
            $this->load->view('common/header',$data);
            $this->load->view('common/mynav',$data);
			
            $this->load->view('page1/page1', $data);
        
        $this->load->view('common/footer1',$data);
	}

	public function page3(){

		
            $data['heading'] = "page 3";
            $data['css1'] = "StyleSheet1";
			$data['css2'] = "p1";
			$data['css3'] = "page3";
            
            $this->load->view('common/header',$data);
            //$this->load->view('common/mynav',$data);
			
            $this->load->view('page3/page3', $data);
        
        $this->load->view('common/footer1',$data);
	}

	public function page5(){

		
            $data['heading'] = "page 5";
            
            $data['css1'] = "page5";
			$data['css2'] = "";
			$data['css3'] = "";
$this->load->view('common/header',$data);
            $this->load->view('page5/page5', $data);
        
        //$this->load->view('common/footer1',$data);
	}

	public function page6(){

		
            $data['heading'] = "page 6";

            $data['css1'] = "p1";
			$data['css2'] = "page6";
			$data['css3'] = "StyleSheet1";
            $this->load->view('common/header',$data);
           // $this->load->view('common/mynav',$data);
            $this->load->view('page6/page6', $data);
        
        $this->load->view('common/footer2',$data);
	}

	public function page2(){

		
            $data['heading'] = "page 2";
            $data['css1'] = "StyleSheet1";
			$data['css2'] = "p1";
			$data['css3'] = "p2";
            $this->load->view('common/header',$data);
            $this->load->view('common/mynav',$data);
            $this->load->view('page2/page2', $data);
        
        $this->load->view('common/footer2',$data);
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