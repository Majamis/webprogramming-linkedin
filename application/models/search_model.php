<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Search_model extends CI_Model {
		
	    function search_by_name($search = null)
	    {
	    	$this->db->select('u.fname,u.lname,c.JTitle,c.Company,c.Picture,c.thumbnail,c.UserId');
	    	$this->db->like('fname', $search); // users table
	    	$this->db->or_like('lname', $search); // users table
			$this->db->or_like('Company', $search); // useradditionalinfo table
			$this->db->or_like('JTitle', $search); // useradditionalinfo table 
			$this->db->from('users u');
			$this->db->join('useradditionalinfo c', 'u.userid = c.UserId', 'left');
			$this->db->group_by('u.userid'); // added a group_by
			$query=$this->db->get();
			$row = $query->row_array();
			$array = null; 
			foreach ($query->result() as $row)
			{
				$array[]=$row;
				
				
			}
			
			$json = json_encode($array);
			echo $json;
	    }


	    function search_by_education()
	    {
	    	$userid_1=$this->session->userdata('userid');
	    	$this->db->select('*');
	    	$this->db->from('useradditionalinfo');
	    	$this->db->where('userid' , $userid_1);
	    	$query=$this->db->get();
	    	$row = $query->row_array();

			$user_company = $row['Company'];
			
			
	    	$this->db->select('u.fname,u.lname,c.JTitle,c.Company,c.Picture,c.thumbnail,c.UserId');	    	
			$this->db->like('Company', $user_company); // useradditionalinfo table
			$this->db->from('users u');
			$this->db->join('useradditionalinfo c', 'u.userid = c.UserId', 'left');
			$this->db->group_by('u.userid'); // added a group_by
			$query=$this->db->get();
			$row = $query->row_array();
			$array = null; 
			foreach ($query->result() as $row)
			{
				$array[]=$row;
				
				
			}
			
			$json = json_encode($array);
			echo $json;
	    }

	    function search_is_connection($userid = null)
	    {
	    	$this->db->select('*');
	    	$this->db->from('users u');
	    	$this->db->where('userid',$this->session->userdata['userid']);
	    	$this->db->join('contacts_info c', 'u.userid = c.UserIdd', 'left');
	    	$query=$this->db->get();
	    	$is_true = "false";
	    	
	   
	   		foreach ($query->result() as $row)
			{
				if($row->ContactId == $userid)
				{
					$is_true = "true";
				}
			}

			echo json_encode($is_true);    

	    }

	   

	}

?>

