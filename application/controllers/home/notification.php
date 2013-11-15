<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Notification extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$this->load->model('contact_notification');
		$result = $this->contact_notification->check_notifications();

	}

	function accept_connection_process($id = null){
			
		if($id != null)
		{
			$this->load->model('accept_model');
			$result=$this->accept_model->accept($id);
			
		}
		redirect('common/page/accept_connection', 'refresh');
			
		}

		function ignore_connection_process($id = null){
			
		if($id != null)
		{
			$this->load->model('accept_model');
			$result=$this->accept_model->ignore($id);
			
		}
		redirect('common/page/accept_connection', 'refresh');
			
		}
}

?>
