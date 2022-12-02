<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Estate_model extends CI_Model {

    
    public function get_active_estate_rent()
    {
            $query = $this->db->query('SELECT * FROM estate WHERE ACTIVE = 1 AND op = 2');
            return $query->result();
    }
    
 
    
    }

