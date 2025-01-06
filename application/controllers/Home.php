<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();

        $this->load->model('home_model');
    }

	public function index()
	{
		$authenticated = $this->session->userdata('authenticated');
		$data = array();
		$data['title'] = 'Home page';
		if ($authenticated) 
		{
			$data['menu'] = 'includes/menus/basic_active';
		} 
		else {
			$data['menu'] = 'includes/menus/basic';
		}
		// $data['menu'] = 'includes/menus/basic';
		$data['landing'] = 'home/landing';
		$data['main_content'] = 'home/index';
		
		$this->load->view('includes/template', $data);
	}

	public function test()
	{
		$data['menu'] = 'includes/menus/basic';
		$data['landing'] = 'home/landing';
		$data['main_content'] = 'home/index';
		$this->load->view('includes/template', $data);
	}
}
