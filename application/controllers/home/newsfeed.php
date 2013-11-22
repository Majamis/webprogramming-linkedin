<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Newsfeed extends CI_Controller{

		function submit_feed()
		{
				$this->load->model('newsfeed_model');
				$result=$this->newsfeed_model->submit_newsfeed();
			
			redirect('common/page/home', 'refresh');
				
		}

		function submit_comment()
		{
			$this->load->model('newsfeed_model');
			$result=$this->newsfeed_model->comment_newsfeed();

			redirect('common/page/home', 'refresh');
		}

		
		

	}


?>
