<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data = array();
		$data['title'] = 'Saafy: About';
		$data['menu'] = 'includes/menus/basic';
		$data['landing'] = 'about/landing';
		$data['main_content'] = 'about/index';

		$this->load->view('includes/template', $data);
	}
}
