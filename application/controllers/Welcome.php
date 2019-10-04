<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('template');
	}
	public function index()
	{
		$data['title'] = 'Index';
		$this->template->init('index', $data);
	}

	public function about()
	{
		$data['title'] = 'About';
		$this->template->init('about', $data);
	}
}
