<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloWorld extends CI_Controller {

	function __construct() {
		parent::__construct();
		// Load url helper
		$this->load->helper('url');
		$this->load->helper('common'); // OR $this->load->helper('common_helper');
	}

	public function index()
	{	
		$this->load->model('message','msg');
		$this->load->model('pointmodel','pointModel');
		$data = array(
			'message' => $this->msg,
			'points' => $this->pointModel->getAllPoints()
		);
		$this->load->view('helloworld', $data);
	}
}
