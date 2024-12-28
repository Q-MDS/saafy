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
		$data['menu'] = 'includes/menus/basic';
		$data['landing'] = 'works/landing';
		$data['main_content'] = 'works/index';

		$this->load->view('includes/template', $data);
	}
}
