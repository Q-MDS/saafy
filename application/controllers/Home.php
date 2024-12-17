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
		$data = array();
		$data['title'] = 'Saafy: Home';
		$data['topbar'] = 'includes/topbar';
		$data['main_content'] = 'home/index';

		$this->load->view('includes/template', $data);
	}
}
