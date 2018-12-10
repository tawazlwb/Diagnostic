<?php

class PointModel extends CI_Model {
    
    function __construct() {
        $this->load->database();
    }

    public function getAllPoints()
	{
        //$query = $this->db->query('SELECT * FROM point');
        //$this->db->where('id', '3');
        $query = $this->db->get('point'); // SELECT * FROM point
        //$query = $this->db->get_where('point', array('id' => '2'));
        return $query->result();
    }
}
