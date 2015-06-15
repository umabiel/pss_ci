<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cargo_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }   

    public function obtenerCargos()
    {
        $query = $this->db->get('cargo');
        if ($query->num_rows() > 0) {
            return $query;
        }else{
            return false;
        }
    }

}

/* End of file  */
/* Location: ./application/models/ */