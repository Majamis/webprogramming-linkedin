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
}

?>
