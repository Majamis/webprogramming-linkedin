<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '30000';
		$config['max_width']  = '2500';
		$config['max_height']  = '2500';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('regpage3/regpage3', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			echo $data['upload_data']['full_path'];
			$path = $data['upload_data']['full_path'];	
		}

		$this->load->model('register_model');	
		$result = $this->register_model->register_user_details_image($path);
		redirect('register/register/page1/registered','refresh');

	}
}
?>