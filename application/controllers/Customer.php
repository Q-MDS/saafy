<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
    }

	public function write_review()
	{
		$data = array();

        echo $this->load->view('customer/reviews/write', $data, TRUE);
	}

	public function report_business()
	{
		$data = array();

        echo $this->load->view('customer/report/index', $data, TRUE);
	}

	public function bookmarks()
	{
		$data = array();
		$data['title'] = 'Saafy: Bookmarks';
		$data['menu'] = 'includes/menus/search';
		$data['landing'] = 'customer/bookmarks/landing';
		$data['main_content'] = 'customer/bookmarks/index';

		$this->load->view('includes/template_search', $data);
	}

	public function reviews()
	{
		$data = array();
		$data['title'] = 'Saafy: Reviews';
		$data['menu'] = 'includes/menus/search';
		$data['landing'] = 'customer/reviews/landing';
		$data['main_content'] = 'customer/reviews/index';

		$this->load->view('includes/template_search', $data);
	}
}
