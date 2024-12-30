<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
    }

	public function set_search()
	{
		$this->session->st_userdata('search_topic', $this->input->post('search_topic'));
		$this->session->st_userdata('search_location', $this->input->post('search_location'));
	}

	public function index()
	{
		$data = array();
		$data['title'] = 'Saafy: Search Results';
		$data['menu'] = 'includes/menus/search';
		$data['landing'] = 'search/landing';
		$data['main_content'] = 'search/index';

		$this->load->view('includes/template_search', $data);
	}

}
