<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Contact_Model extends CI_Model {
	

		 function addcontact($contact_userid)
	    {

	    	$data['relationid'] = $this->security->xss_clean($this->input->post('reason'));
			$data['personal_note'] = $this->security->xss_clean($this->input->post('greeting'));
	    	$data['userid'] = $this->session->userdata('userid');
			$data['contact_userid'] = $contact_userid;
			$data['time_date'] = date('y-m-d');

			$this->db->select('*');
			$this->db->from('add_contact_notification');
			$this->db->where('userid',$data['userid']);
			$this->db->where('contact_userid',$data['contact_userid']);
    		$query = $this->db->get();
    		
    		if($query->num_rows() > 0)
			{
				return false;
			}
			else
			{
				$this->db->insert('add_contact_notification', $data);
			}
	    }
	}

?>