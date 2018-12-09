<?php

class PointDAO extends CI_Model {
    
    function __construct() {
        $this->load->database();
    }

    public function getAllPoints()
	{
        $query = $this->db->query('SELECT * FROM point');
        return $query->result_array();
    }
}
