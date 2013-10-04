<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Register_model extends CI_Model {
	    function register_user()
	    {
	    	$query = $this->db->get('users');


	    	$data['fname'] = $this->security->xss_clean($this->input->post('firstName'));
			$data['lname'] = $this->security->xss_clean($this->input->post('lastName'));
	    	$data['username'] = $this->security->xss_clean($this->input->post('email'));
			$data['password'] = $this->security->xss_clean($this->input->post('password'));
			

			$this->db->insert('users', $data);
	        
	    }
	}

?>