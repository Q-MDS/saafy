<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_customer extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data = array();
		$data['title'] = 'Login';
		$data['main_content'] = 'login/customer/index';
		
		$this->load->view('includes/template_form', $data);
	}
}
