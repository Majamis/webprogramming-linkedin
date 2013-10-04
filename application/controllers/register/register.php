<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Register controller class
 */
class Register extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	
	public function process(){
		// Load the model
		$this->load->model('register_model');
		$result = $this->register_model->register_user();

		// Now we verify the result

		//if()
		//{

		//}
		//else
		//{ 
    		redirect('common/page/page6','refresh');
		//}
	
	}

}


?>