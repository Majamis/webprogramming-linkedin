<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Accept_Model extends CI_Model {
	
		function accept($id){
			//$id['ContactId'] = $this->security->xss_clean($this->input->post('contactid'));
			//$id['UserId'] = $this->security->xss_clean($this->input->post('userid'));
			
			$this->db->select('*');
			$this->db->from('contacts_info');
			$this->db->where('ContactId',$id);
			//$this->db->where('contact_userid',$data['contact_userid']);
    		$query = $this->db->get();
    		
    		if($query->num_rows() != 0)
			{
				return false;
			}
			else
			{
				$UserIdd=$this->session->userdata('userid');
				$data = array(
					'UserIdd' => $this->session->userdata('userid'),
					'ContactId' => $id
					);
				//$ContactId=$id;
				$this->db->insert('contacts_info', $data);
			}

		}

		function ignore($id){
			//$id['ContactId'] = $this->security->xss_clean($this->input->post('contactid'));
			//$id['UserId'] = $this->security->xss_clean($this->input->post('userid'));
			
			$this->db->where('userid',$this->session->userdata('userid'));
			$this->db->where('contact_userid',$id);
			$this->db->delete('add_contact_notification');/*
			$query=$this->db->get('add_contact_notification');
    		
    		if($query->num_rows() == 0)
			{
				return false;
			}
			else
			{
				$this->db->delete('add_contact_notification', array('contact_userid' => $id));
			}*/

		}

	}

?>