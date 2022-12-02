<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Estate_model extends CI_Model {

    
    public function getActiveEstatesInRent()
    {
            $query = $this->db->query('SELECT * FROM estate WHERE ACTIVE = 1 AND op = 2');
            return $query->result();
    }

    public function getPhotosFromEstate($estateRel)
    {
            $query = $this->db->query("SELECT * FROM gallery_estate WHERE gallery_estate.rel=$estateRel");
            return $query->result();
    }

    public function getExtrasFromEstate($estateRel)
    {
            $query = $this->db->query("SELECT extras.name name, extras.icon icon 
            FROM estate_extras, extras
            WHERE estate_extras.rel_estate=$estateRel
            AND estate_extras.rel_extras=extras.rel 
            AND extras.id_lang=1");
            return $query->result();
    }
    
 
    
    }