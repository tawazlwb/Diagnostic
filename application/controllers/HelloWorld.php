<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloWorld extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{	
		$data = array(
			'message' => $this->msg,
			'points' => $this->pointModel->getAllPoints()
		);
		$this->load->view('helloworld', $data);
	}
}
