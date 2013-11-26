<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Newsfeed_model extends CI_Model {
		
	    function submit_newsfeed($text =null,$path=null, $status = null)
	    {
	    	$data['userid'] = $this->session->userdata('userid');
	    	$data['text']=$this->security->xss_clean($text);
	    	$data['status']=$this->security->xss_clean($status);
	    	//$data['text'] = $this->security->xss_clean($this->input->post('postText'));
			//$data['status'] = $this->security->xss_clean($this->input->post('postVisibility2'));
	   		$data['time'] = date('y-m-d');
	   		$data['picture'] = $path;

	   		$this->db->insert('newsfeed', $data);
	    }

	    function comment_newsfeed($text = null,$nf_id = null)
	    {
	    	$data['nf_id']=$this->security->xss_clean($nf_id);
	    	//$data['nf_id']=$this->security->xss_clean($this->input->post('mentions'));;
	    	$data['userid'] = $this->session->userdata('userid');
	    	//$data['text'] = $this->security->xss_clean($this->input->post('postText1'));
	   		$data['text'] = $this->security->xss_clean($text);
	   		$data['time'] = date('y-m-d');

	   		$this->db->insert('comments_newsfeed',$data);
	    }
	}
?>