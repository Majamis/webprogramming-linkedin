<?php
// main ajax back end
class Search extends CI_Controller {
  // just returns time
  public function index()
  {
  	
  		$input = $_REQUEST['data'];
		$this->load->model('search_model');
		$result = $this->search_model->search_by_name($input);
  } 
}
?>