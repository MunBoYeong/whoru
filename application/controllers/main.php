<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('Header_v');
		$this->load->view('Menus_v');
		$this->load->view('index_v');
		$this->load->view('Footer_v');
	}
}
