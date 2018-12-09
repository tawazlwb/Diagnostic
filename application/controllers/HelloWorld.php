<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloWorld extends CI_Controller {

	function __construct() {
		parent::__construct();
		// Load url helper
		$this->load->helper('url');
	}

	public function index()
	{	
		$this->load->model('message','msg');
		$this->load->model('pointdao','p');
		$data = array(
			'message' => $this->msg,
			'points' => $this->p->getAllPoints()
		);
		$this->load->view('helloworld', $data);
	}
}
