<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Search_model extends CI_Model {
		
	    function search_by_name($search = null)
	    {
	    	$this->db->select('u.fname,u.lname,c.JTitle,c.Company,c.Picture,c.thumbnail');
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

	}

?>

