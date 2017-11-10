<?php
class customer extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();


    }public function loginCustomer()
	{
		$this->load->view("navbar");
		//$this->load->view("header");
		$this->load->view("customer/loginCustomer");
		$this->load->view("footer");
	}
	public function regisCustomer()
	{
		$this->load->view("navbar");
		//$this->load->view("header");
		$this->load->view("customer/regisCustomer");
		$this->load->view("footer");
	}
}
?>
