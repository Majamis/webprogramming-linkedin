<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Register_model extends CI_Model {
	    function register_user()
	    {
	    	$query = $this->db->get('users');


	    	$data['fname'] = $this->security->xss_clean($this->input->post('firstName'));
			$data['lname'] = $this->security->xss_clean($this->input->post('lastName'));
	    	$data['username'] = $this->security->xss_clean($this->input->post('email'));
			$data['password'] = $this->security->xss_clean($this->input->post('password'));

			$this->db->select('username');
			$this->db->where('username',$data['username']);
    		$query = $this->db->get('users');

			

			if($query->num_rows() > 0)
			{
				return false;
			}
			else
			{
			$this->db->insert('users', $data);
			$userid = mysql_insert_id();
			$key = $data['username'] . date('mY');
			$key = md5($key);
			$email=$data['username'];
			$confirm = mysql_query("INSERT INTO `confirm` VALUES(NULL,'$userid','$key','$email')"); 
			if($confirm){
				$info ['username'] = $email;  
    			$info ['key'] = $key;
    			$info ['value'] = true;
    			return $info;
    			
			}  
      
				
			

			return true;
	        }
	    }
	}

?>
