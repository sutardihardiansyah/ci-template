<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('template');
	}
	public function index()
	{
		$data['title'] = 'Login';
		$this->template->auth('auth/login', $data);
	}

	public function register_add()
	{
		$data['title'] = 'Register';
		$this->template->auth('auth/register', $data);
	}
}
