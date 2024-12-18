<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data = array();
		$data['title'] = 'Saafy: Search';
		// $data['topbar'] = 'includes/topbar';
		$data['main_content'] = 'search/index';

		$this->load->view('includes/template_search', $data);
	}

	public function view()
	{
		$data = array();
		$data['title'] = 'Saafy: Search: View';
		$data['main_content'] = 'search/view';

		$this->load->view('includes/template_search', $data);
	}
}
