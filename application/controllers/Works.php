<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data = array();
		$data['title'] = 'Saafy: How it works';
		$data['topbar'] = 'includes/topbar';
		$data['main_content'] = 'works/index';
		$data['intro_type'] = 'Works';

		$this->load->view('includes/template', $data);
	}
}
