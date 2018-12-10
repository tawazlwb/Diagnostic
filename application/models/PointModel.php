<?php

class PointModel extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    public function getAllPoints()
	{
        $query = $this->db->get('point');
        return $query->result();
    }
}
