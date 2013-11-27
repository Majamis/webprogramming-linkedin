<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Newsfeed extends CI_Controller{

		function __construct()
		{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
     	 $this->load->database();
     	 $this->load->helper('url');
		}

					//---upload----//
		function do_upload()
		{
			$text = $_REQUEST['data2'];
	        $status = $_REQUEST['data'];

		$config['upload_path'] = './uploads/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '30000000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';
		$pic_path=NULL;
		$data=NULL;
		$path=NULL;
		$empty = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			
			$error = array('error' => $this->upload->display_errors());

			//$this->load->view('regpage3/regpage3', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$path = $data['upload_data']['file_name'];	
			$path = 'uploads/images/'.$path;
			$pic_path=$path;
			$empty = false;
		}

				$this->load->model('newsfeed_model');
				$result=$this->newsfeed_model->submit_newsfeed($text,$path,$status);
			
			//redirect('common/page/home', 'refresh');	
	}

		function submit_comment()
		{
			//$text = $_REQUEST['data2'];
	        $nf_id= $_REQUEST['mentions'];
	       	$text = $_REQUEST['postText1'];
	        
			$this->load->model('newsfeed_model');
			$result=$this->newsfeed_model->comment_newsfeed($text,$nf_id);


			//redirect('common/page/home','refresh');
		}	

	}


?>
