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
		$data['topbar'] = 'includes/topbar';
		$data['main_content'] = 'about/index';
		$data['intro_type'] = 'About';

		$this->load->view('includes/template', $data);
	}
}
