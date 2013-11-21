<?php
// main ajax back end
class Search extends CI_Controller {
  // just returns time
  public function index()
  {
  	
  		$input = $_REQUEST['data'];
      $value = $_REQUEST['data2'];
		$this->load->model('search_model');
    //echo $value;
    if($value == "all")
    {
		  $result = $this->search_model->search_by_name($input);
    }
    if($value == "people")
    {

    }
    if($value == "jobs")
    {

    }
    if($value == "company")
    {

    }
  } 
   public function index_2()
  {
    
    $this->load->model('search_model');
    $result = $this->search_model->search_by_education();
  } 
  
  public function is_connection()
  {
  	$userid = $_REQUEST['data'];
  	$this->load->model('search_model');
  	$this->search_model->search_is_connection($userid);
  }
}
?>