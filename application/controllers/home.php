<?php 
class home extends CI_Controller {
	 function __construct()
    {
        // this is your constructor
        parent::__construct();
      
    }public function index()
	{
		$this->load->view("navbar");
		$this->load->view("header");
		$this->load->view("content");
		$this->load->view("footer");
	}
}
?>