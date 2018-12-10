<?php

class PointModel extends CI_Model {
    
    function __construct() {
        //$this->load->database();
    }

    public function getAllPoints()
	{
        $query = $this->db->get('point'); // SELECT * FROM point
        return $query->result();
    }
}
