<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Contact_notification extends CI_Model {
	

		 function check_notifications()
	    {
	    	$this->load->library('table');
	    	


	    	$userid = $this->session->userdata('userid');
	    	$this->db->select('*');
	    	$this->db->from('add_contact_notification');
			$this->db->where('userid',$userid);
    		$query = $this->db->get();


    		//$row = $query->row_array();
    		$no_of_notification = 0;


    		$query_row = array();
    		$table = null;

    		$array = null;
    		foreach ($query->result() as $row)
			{
				$this->db->select('*');
	    		$this->db->from('useradditionalinfo');
	    		$this->db->where('userid',$row->contact_userid);
	    		$query_img= $this->db->get();
	    		$row_pic = $query_img->row_array(); 

	    		$this->db->select('*');
	    		$this->db->from('users');
	    		$this->db->where('userid',$row->contact_userid);
	    		$query_username= $this->db->get();
	    		$row_username = $query_username->row_array(); 

	    		$row->picture = $row_pic['Picture'];
	    		$row->fname = $row_username['fname'];
	    		$row->lname = $row_username['lname'];




				$array[]= $row;
				$no_of_notification++;
   				//echo $row->contact_userid;
   				//echo $row->personal_note;
   				//echo $row->relationid;
			/*
			$query_row[] = ''.
			'<li class="inbox-item message-item unread">'.
			'<a href="" >'.
			'<img src="" class="photo" alt="" height="40" width="40">'.
			'</a>'.
			'<div class="item-content actions-left">'.
				'<div class="date">'
					 .$row->time_date.
				'</div>'. 
				'<span class="participants">' .
				'<a href="/profile/view?id=281376742&amp;authType=name&amp;authToken=LnHX&amp;goback=&amp;trk=hb-messages-item-pro-v2" tracking="newInbox">'
				.$row->contact_userid . '</a>'.
				'</span>'.
				'<p class="subject">'.
					'<a class="detail-link " href="/inbox/mailbox/message/get?itemId=I260290449_220&amp;goback=&amp;trk=hb-messages-item-subj-v2">'
					.$row->personal_note. '</a>'.
				'</p>'.
				'<p class="preview">'
					 .$row->personal_note.
				'</p>'.
			'</div>'.
			'<ul class="inbox-actions">'.
				'<li>'.
				'<a data-action="replyToSender" data-action-url="" class="reply" href="/inbox/action?mboxItemGID=I260290449_220&amp;actionType=replyToSender&amp;csrfToken=ajax%3A7006840186751427387&amp;trk=hb-messages-item-reply-v2">Reply</a>'.
				'</li>'.
				'<li>'.
				'<a data-action="forward" data-action-url="" class="forward" href="/inbox/action?mboxItemGID=I260290449_220&amp;actionType=forward&amp;csrfToken=ajax%3A7006840186751427387&amp;trk=hb-messages-item-forward-v2">Forward</a>'.
				'</li>'.
				'<li>'.
				'<a data-action="archive" data-action-url="/inbox/action?mboxItemGID=I260290449_220&amp;actionType=archive&amp;csrfToken=ajax%3A7006840186751427387&amp;trk=hb-messages-item-archive-v2" class="archive" href="/inbox/action?mboxItemGID=I260290449_220&amp;actionType=archive&amp;csrfToken=ajax%3A7006840186751427387&amp;trk=hb-messages-item-archive-v2">Archive</a>'.
				'</li>'.
				'<li>'.
				'<a data-action="trash" data-action-url="/inbox/action?mboxItemGID=I260290449_220&amp;actionType=trash&amp;csrfToken=ajax%3A7006840186751427387&amp;trk=hb-messages-item-delete-v2" class="delete" href="/inbox/action?mboxItemGID=I260290449_220&amp;actionType=trash&amp;csrfToken=ajax%3A7006840186751427387&amp;trk=hb-messages-item-delete-v2">Delete</a>'.
				'</li>'.
			'</ul>'.
			'</li>';

			$this->table->add_row($query_row);
			*/
			}
		  // $requested_activities_table = $this->table->generate();
		   // echo $requested_activities_table;
			$json = json_encode($array);
			echo $json;
		  }



	    }

?>