<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArrayHelperDemo extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper('array');
	}

	public function index() {	
        
        $data['seo'] = array(
            'meta_desc' => 'This is my description of the page',
            'meta_key' => 'this,is,a,keywords',
            'title' => $this->diag_lib->getTitle() 
		);
		$this->load->view('array_helper_view', $data);
	}
}
