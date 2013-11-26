<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Newsfeed extends CI_Controller{

		function __construct()
		{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		}

					//---upload----//
		function do_upload()
		{

			$text = $_REQUEST['data2'];
	        $status = $_REQUEST['data'];
		$config['upload_path'] = './uploads/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '30000';
		$config['max_width']  = '2500';
		$config['max_height']  = '2500';
		$pic_path=NULL;
		$data=NULL;
		$path=NULL;
		$empty = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
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

		//if(!$empty)
		//{
		 $filename = $data['upload_data']['file_name'];
    	 $source_path = $data['upload_data']['full_path'];

    	 $target_path = $data['upload_data']['file_path'] . '/thumb/';
    	 $config_manip = array(
        'source_image' => $source_path,
        'new_image' => $target_path,
        'maintain_ratio' => TRUE,
        'create_thumb' => TRUE,
        'thumb_marker' => '',
        'width' => 60,
        'height' => 60

    );
	
    	$this->load->library('image_lib', $config_manip);
    	if (!$this->image_lib->resize()) {
        echo $this->image_lib->display_errors();
   		 }
    // clear //
    $this->image_lib->clear();
    $thumb_path='uploads/images/thumb/'.$filename;
    //------
	//}
				$this->load->model('newsfeed_model');
				$result=$this->newsfeed_model->submit_newsfeed($text,$path,$status);
			
			//redirect('common/page/home', 'refresh');	
	}

		function submit_comment()
		{
			$text = $_REQUEST['data2'];
	        $nf_id = $_REQUEST['data'];

			$this->load->model('newsfeed_model');
			$result=$this->newsfeed_model->comment_newsfeed($text,$nf_id);


			//redirect('common/page/home','refresh');
		}	

	}


?>
