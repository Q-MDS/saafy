<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_customer extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();

        $this->load->model('signup_customer_model');
    }

	public function popup()
	{
		$data = array();

        echo $this->load->view('signup_customer/popup', $data, TRUE);
	}

	public function index()
	{
		$data = array();
		$data['title'] = 'Signup';
		$data['main_content'] = 'signup_customer/index';
		
		$this->load->view('includes/template_form', $data);
	}

	public function confirm()
	{
		$data = array();
		$data['title'] = 'Signup';
		$data['main_content'] = 'signup_customer/confirm';
		
		$this->load->view('includes/template_form', $data);
	}
}
