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
    			$info ['username'] = $email;
    			return $info;
    			
			}  
      
				
			

			return true;
	        }
	    }

	     function register_user_details()
	    {
	    	$username = $this->security->xss_clean($this->input->post('username'));
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username',$username);
    		$query = $this->db->get();
    		$row = $query->row_array();

			$data['UserId']= $row['userid'];
			$data['Country'] = $this->security->xss_clean($this->input->post('countryCode'));
			$data['PostalCode'] = $this->security->xss_clean($this->input->post('postalCode'));
	    	$data['Jtitle'] = $this->security->xss_clean($this->input->post('workCompanyTitle'));
			$data['SelfEmp'] = $this->security->xss_clean($this->input->post('selfEmployed'));
			$data['Company'] = $this->security->xss_clean($this->input->post('companyName'));
			$data['Industry'] = $this->security->xss_clean($this->input->post('industryChooser'));
			$data['TypeId'] = $this->security->xss_clean($this->input->post('status-chooser'));
			$this->db->insert('useradditionalinfo', $data);
			
			return true;
	    }

	    function verify($key)
	    {
	
	    	$this->db->select('*');
	    	$this->db->from('confirm');
	 		$this->db->where('key', $key);
	 		$query = $this->db->get();

	 		$row = $query->row_array();
	 		$username = $row['email'];

	 		
	 		//echo $query->result();

	    	if($query->num_rows() == 1)
	    	{
	    		$this->db->get('users');
	    		$this->db->set('validate', '1', False);
	    		$this->db->where('username', $username);
    			$this->db->update('users');
    			return true;
	    	}
	    	else
	    		return false;
	    	

	    }
	}

?>
