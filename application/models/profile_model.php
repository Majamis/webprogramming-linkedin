<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Profile_model extends CI_Model {
		
	    function index($userid = null)
	    {
	    	$this->db->select('u.fname,u.lname,c.JTitle,c.Company,c.Picture,c.thumbnail,c.Picture,c.Country');
	    	$this->db->where('u.userid', $userid);
			$this->db->from('users u');
			$this->db->join('useradditionalinfo c', 'u.userid = c.UserId', 'left');
			$this->db->group_by('u.userid'); // added a group_by
			$query=$this->db->get();
			$row = $query->row_array();
			$array = null; 
			$data = null;
			foreach ($query->result() as $row)
			{
				$data['fname']=$row->fname;
				$data['lname']=$row->lname;
				$data['jtitle']=$row->JTitle;
				$data['thumbnail']=$row->thumbnail;
				$data['picture']=$row->Picture;
				$data['country']=$row->Country;
				$data['company']=$row->Company;	
			}
			
			return $data;
	    }

	}

?>

