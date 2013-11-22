<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Profile_model extends CI_Model {
		
	    function submit_newsfeed()
	    {
	    	$data['userid'] = $this->session->user_data('userid');
	    	$data['text'] = $this->security->xss_clean($this->input->post('postText'));
			$data['status'] = $this->security->xss_clean($this->input->post('postVisibility2'));
	   		$data['time_date'] = date('y-m-d');

	   		$this->db->insert('newsfeed', $data);
	    }

	    function comment_newsfeed()
	    {
	    	$data['nf_id']=$this->security->xss_clean($this->input->post('mentions'));;
	    	$data['userid'] = $this->session->user_data('userid');
	    	$data['text'] = $this->security->xss_clean($this->input->post('postText'));
	   		$data['time_date'] = date('y-m-d');

	   		$this->db->insert('comments_newsfeed',$data);
	    }
	}
?>