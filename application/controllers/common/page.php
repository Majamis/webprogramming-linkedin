<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class page extends CI_Controller{
	public $userid_to_invite;

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
	
	public function home(){
			//$data['search_text']="hello";
			$data['search_text'] = $this->security->xss_clean($this->input->get('keywords'));
            $data['heading'] = "Home";
            $data['css1'] = "header_logged";
			$data['css2'] = "";
			$data['css3'] = "";
			$this->load->view('common/header',$data);
            $this->load->view('common/header_home',$data);
            $this->load->view('common/footer_home',$data);
           // $this->load->view('common/mynav',$data);
			
           // $this->load->view('Country_View/country_View', $data);
        
        //$this->load->view('common/footer2',$data);
	}
	
	public function advance_search(){
			$data['search_text'] = $this->security->xss_clean($this->input->get('keywords'));
			//$data['search_text'] = "hello";
            $data['heading'] = "Home";
            $data['css1'] = "header_logged";
			$data['css2'] = "quicksearch";
			$data['css3'] = "profile";
			$this->load->view('common/header',$data);
            $this->load->view('common/header_home',$data);
            $this->load->view('home/alumini',$data);
            $this->load->view('common/footer_home',$data);
           	//$this->load->view('common/mynav',$data);
		
           // $this->load->view('Country_View/country_View', $data);
        
        //$this->load->view('common/footer2',$data);
	}

	public function accept_connection(){
			$data['search_text'] = $this->security->xss_clean($this->input->get('keywords'));
			//$data['search_text'] = "hello";
            $data['heading'] = "Accept Request";
            $data['css1'] = "header_logged";
			$data['css2'] = "acceptconnection";
			$data['css3'] = "";
			$this->load->view('common/header',$data);
            $this->load->view('common/header_home',$data);
            $this->load->view('home/accept_conn',$data);
            $this->load->view('common/footer_home',$data);
           	//$this->load->view('common/mynav',$data);
		
           // $this->load->view('Country_View/country_View', $data);
        
        //$this->load->view('common/footer2',$data);
	}

	public function alumini(){
			$data['search_text'] = $this->security->xss_clean($this->input->get('keywords'));
			//$data['search_text'] = "hello";
            $data['heading'] = "Alumni | LinkedIn";
            $data['css1'] = "header_logged";
			$data['css2'] = "alumini";
			$data['css3'] = "";
			$this->load->view('common/header',$data);
            $this->load->view('common/header_home',$data);
            $this->load->view('home/alumini',$data);
            $this->load->view('common/footer_home',$data);
           	//$this->load->view('common/mynav',$data);
		
           // $this->load->view('Country_View/country_View', $data);
        
        //$this->load->view('common/footer2',$data);
	}

	public function profile($msg = null){
			$data['fname']=null;
			$data['lname']=null;
			$data['jtitle']=null;
			$data['thumbnail']=null;
			$data['picture']=null;
			$data['country']=null;
			$data['company']=null;
		if($msg != null)
		{
			$this->load->model('profile_model');
			$result=$this->profile_model->index($msg);
			$data['fname']=$result['fname'];
			$data['lname']=$result['lname'];
			$data['jtitle']=$result['jtitle'];
			$data['thumbnail']=$result['thumbnail'];
			$data['picture']=$result['picture'];
			$data['country']=$result['country'];
			$data['company']=$result['company'];
		}
			$data['userid'] = $msg;
			$data['search_text'] = NULL;
            $data['heading'] = "Home";
            $data['css1'] = "header_logged";
			$data['css2'] = "profile";
			$data['css3'] = "";
			$this->load->view('common/header',$data);
           	$this->load->view('common/header_home',$data);
            $this->load->view('home/profile1',$data);
            $this->load->view('common/footer_home',$data);
           // $this->load->view('common/mynav',$data);
			
           // $this->load->view('Country_View/country_View', $data);
        
        //$this->load->view('common/footer2',$data);
	}

	public function request_invite()
	{
		
	}
	
	public function send_invite($userid = null){
		if($userid != null)
		{
			$this->load->model('profile_model');
			$data=$this->profile_model->index($userid);
			$data['userid']=$userid;
		}
		$this->userid_to_invite=$userid;
		echo $this->userid_to_invite;
			$data['search_text'] = null;
            $data['heading'] = "Home";
            $data['css1'] = "header_logged";
			$data['css2'] = "send_invite";
			$data['css3'] = "";
			$this->load->view('common/header',$data);
            $this->load->view('common/header_home',$data);
            $this->load->view('home/send_invite',$data);
            $this->load->view('common/footer_home',$data);
           // $this->load->view('common/mynav',$data);
			
           // $this->load->view('Country_View/country_View', $data);
        
        //$this->load->view('common/footer2',$data);
	}

	public function send_contact_request($contactid = null)
	{
		$this->load->model('contact_model');
		$this->contact_model->addcontact($contactid);
		//$this->home();
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

	


	

	public function page6($msg = NULL){

			$data['msg'] = $msg;
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