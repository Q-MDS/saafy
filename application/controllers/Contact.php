<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data = array();
		$data['title'] = 'Saafy: Contact Us';
		$data['menu'] = 'includes/menus/basic';
		$data['landing'] = 'contact/landing';
		$data['main_content'] = 'contact/index';

		$this->load->view('includes/template', $data);
	}
}
