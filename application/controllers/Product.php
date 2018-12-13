<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct() {
        parent::__construct();
	}

	public function index($product_name='') {	
        echo '<h1>' . $product_name .'</h1>';
        $data = array(
		'title' => $this->diag_lib->getTitle() 
		);
		$this->load->view('product_view', $data);
	}
}
