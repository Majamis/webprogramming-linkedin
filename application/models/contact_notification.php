<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Contact_notification extends CI_Model {
	

		 function check_notifications()
	    {
	    	$this->load->library('table');
	    	


	    	$userid = $this->session->userdata('userid');
	    	$this->db->select('*');
	    	$this->db->from('add_contact_notification');
			$this->db->where('contact_userid',$userid);
    		$query = $this->db->get();

    		$no_of_notification = 0;

    		$query_row = array();
    		$table = null;

    		$array = null;
    		foreach ($query->result() as $row)
			{
				$this->db->select('*');
	    		$this->db->from('useradditionalinfo');
	    		$this->db->where('userid',$row->userid);
	    		$query_img= $this->db->get();
	    		$row_pic = $query_img->row_array(); 

	    		$this->db->select('*');
	    		$this->db->from('users');
	    		$this->db->where('userid',$row->userid);
	    		$query_username= $this->db->get();
	    		$row_username = $query_username->row_array(); 

	    		$row->picture = $row_pic['Picture'];
	    		$row->thumbnail = $row_pic['thumbnail'];
	    		$row->fname = $row_username['fname'];
	    		$row->lname = $row_username['lname'];




				$array[]= $row;
				$no_of_notification++;
   		
			}
			$json = json_encode($array);
			echo $json;
		  }



	    }

?>