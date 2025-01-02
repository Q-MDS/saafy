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

	public function forgot()
	{
		$data = array();
		$data['title'] = 'Login';
		$data['main_content'] = 'login/customer/forgot';
		
		$this->load->view('includes/template_form', $data);
	}

	public function forgot_confirm()
	{
		$data = array();
		$data['title'] = 'Login';
		$data['main_content'] = 'login/customer/forgot_confirm';
		
		$this->load->view('includes/template_form', $data);
	}
}
