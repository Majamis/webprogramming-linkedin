<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Search_model extends CI_Model {
		
	    function search_by_name($search = null)
	    {
	    	$this->db->select('u.fname,u.lname,c.JTitle,c.Company,c.Picture,c.thumbnail,c.UserId');
	    	$this->db->like('fname', $search); // users table
	    	$this->db->or_like('lname', $search); // users table
	    	$this->db->or_like('JTitle', $search); // useradditionalinfo table 
			$this->db->or_like('Company', $search); // useradditionalinfo table
			$this->db->from('users u');
			$this->db->join('useradditionalinfo c', 'u.userid = c.UserId', 'left');
			//$this->db->group_by('u.userid'); // added a group_by
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
			//echo "hello";
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

	    function display_user_feeds()
	    {

	    	$this->db->select('*');
	    	$this->db->from('contacts_info');
	    	$this->db->where('UserIdd',$this->session->userdata['userid']);
	    	$query=$this->db->get();
	    	foreach ($query->result() as $row)
			{

				$this->db->select('us.fname,us.lname,u.thumbnail,u.UserId,n.id,n.text,n.status,n.time,n.picture');
				$this->db->from('newsfeed n');
				$this->db->where('n.userid',$row->ContactId);
				$this->db->where('status',"CONNECTIONS");
				$this->db->join('useradditionalinfo u', 'n.userid = u.UserId', 'left');
				$this->db->join('users us', 'n.userid = us.userid', 'left');
				$query2=$this->db->get();
				foreach( $query2->result() as $row2)
				{
					$array[]=$row2;
				}
			}
			$this->db->select('us.fname,us.lname,u.thumbnail,u.UserId,n.id,n.text,n.status,n.time,n.picture');
	    	$this->db->from('newsfeed n');
	    	$this->db->where('status',"EVERYONE");
	    	$this->db->join('useradditionalinfo u', 'n.userid = u.UserId', 'left');
	    	$this->db->join('users us', 'n.userid = us.userid', 'left');
	    	$query3=$this->db->get();
	    	foreach($query3->result() as $row3)
	    	{
	    		$array[]=$row3;
	    	}
	    		$this->db->select('us.fname,us.lname,u.thumbnail,u.UserId,n.id,n.text,n.status,n.time,n.picture');
				$this->db->from('newsfeed n');
				$this->db->where('n.userid',$this->session->userdata['userid']);
				$this->db->where('status',"CONNECTIONS");
				$this->db->join('useradditionalinfo u', 'n.userid = u.UserId', 'left');
				$this->db->join('users us', 'n.userid = us.userid', 'left');
				$query2=$this->db->get();
				foreach( $query2->result() as $row4)
				{
					$array[]=$row4;
				}

	    	$json = json_encode($array);
			echo $json;
	    }	

	   function display_feed_comments($input)
	    {
	    	$this->db->select('us.fname,us.lname,u.thumbnail,u.UserId,n.id,n.text,n.time');
			$this->db->from('comments_newsfeed n');
			$this->db->where('nf_id',$input);
			$this->db->join('useradditionalinfo u', 'n.userid = u.UserId', 'left');
	    	$this->db->join('users us', 'n.userid = us.userid', 'left');
			$query2=$this->db->get();
			$array="";
			foreach($query2->result() as $row)
			{
				$array[]=$row;
			}
			if($array)
			{
			$json = json_encode($array);
			echo $json;
			}
			else
			echo 1;
	    }

	}

?>

