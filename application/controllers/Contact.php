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
		$data['title'] = 'Saafy: Contact';
		$data['topbar'] = 'includes/topbar';
		$data['main_content'] = 'contact/index';
		$data['intro_type'] = 'Contact';

		$this->load->view('includes/template', $data);
	}
}
