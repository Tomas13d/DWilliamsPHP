<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Estate_model extends CI_Model
{
        /* Estates */
        public function getSingleEstateActive($estateRel)
        {
                $query = $this->db->query("SELECT * FROM estate WHERE (rel=$estateRel AND ACTIVE= 1)AND id_lang=1");
                $result = $query->result()[0];
                $photos = $this->Estate_model->getPhotosFromEstate($estateRel);
                $extraIcons = $this->Estate_model->getExtrasFromEstate($estateRel);
                $categoryName = $this->Estate_model->getCategorie($result->categoryRel);
                $subcategoryName = $this->Estate_model->getSubCategorie($result->subcategoryRel);
                $state = $this->Estate_model->getState($result->stateID);
                $city = $this->Estate_model->getCity($result->cityID);
                $disctrict = $this->Estate_model->getDisctrict($result->districtID);
                $result->images = $photos;
                $result->extraIcons = $extraIcons;
                $result->categoryName = $categoryName;
                $result->subcategoryName = $subcategoryName;
                $result->state = $state;
                $result->city = $city;
                $result->disctrict = $disctrict;
                $fixedCoordinates = str_replace(' ', '', $result->coordinates);
                $result->coordinates = $fixedCoordinates;


                return $result;
        }
        public function getActiveEstatesInRent()
        {
                $query = $this->db->query("SELECT * FROM estate WHERE (ACTIVE = 1 AND op = 2) AND id_lang=1");
                return $query->result();
        }
        public function getActiveEstatesInRentLimited($limit)
        {
                $query = $this->db->query("SELECT * FROM estate WHERE (ACTIVE = 1 AND op = 2) AND id_lang=1 LIMIT $limit");
                return $query->result();
        }

        public function getActiveEstatesForSale()
        {
                $query = $this->db->query('SELECT * FROM estate WHERE (ACTIVE = 1 AND op = 1) AND id_lang=1');
                return $query->result();
        }

        public function getActiveEstatesForSaleLimited($limit)
        {
                $query = $this->db->query("SELECT * FROM estate WHERE (ACTIVE = 1 AND op = 1) AND id_lang=1 LIMIT $limit");
                return $query->result();
        }
        /* Photos */
        public function getPhotosFromEstate($estateRel)
        {
                $query = $this->db->query("SELECT * FROM gallery_estate WHERE gallery_estate.rel=$estateRel");
                return $query->result();
        }
        public function getPhotosFromEstateLimited($estateRel, $limit)
        {
                $query = $this->db->query("SELECT * FROM gallery_estate WHERE gallery_estate.rel=$estateRel LIMIT $limit");
                return $query->result();
        }
        /* Extras */
        public function getExtrasFromEstate($estateRel)
        {
                $query = $this->db->query("SELECT extras.name name, extras.icon icon 
                FROM estate_extras, extras
                WHERE estate_extras.rel_estate=$estateRel
                AND estate_extras.rel_extras=extras.rel 
                AND extras.id_lang=1");
                return $query->result();
        }

        public function getExtrasFromEstateLimited($estateRel, $limit)
        {
                $query = $this->db->query("SELECT extras.name name, extras.icon icon 
                FROM estate_extras, extras
                WHERE estate_extras.rel_estate=$estateRel
                AND estate_extras.rel_extras=extras.rel 
                AND extras.id_lang=1 LIMIT $limit");
                return $query->result();
        }
        /* Category */
        public function getCategorie($categoryRel)
        {
                $query = $this->db->query("SELECT * FROM category WHERE rel=$categoryRel AND id_lang=1");
                if ($query->result()) {
                        return $query->result()[0];
                } else {
                        return $query->result();
                }
        }
        /* Subcategory */
        public function getSubCategorie($subcategoryRel)
        {
                $query = $this->db->query("SELECT * FROM subcategory WHERE rel=$subcategoryRel AND id_lang=1");
                if ($query->result()) {
                        return $query->result()[0];
                } else {
                        return $query->result();
                }
        }
        /* Provincia */
        public function getState($cityRel)
        {
                $query = $this->db->query("SELECT * FROM state WHERE id_state=$cityRel");
                if ($query->result()) {
                        return $query->result()[0];
                } else {
                        return $query->result();
                }
        }
        /* Localidad */
        public function getCity($stateRel)
        {
                $query = $this->db->query("SELECT * FROM city WHERE id_city=$stateRel");
                if ($query->result()) {
                        return $query->result()[0];
                } else {
                        return $query->result();
                }
        }
        /* Barrio */
        public function getDisctrict($districtRel)
        {
                $query = $this->db->query("SELECT * FROM district WHERE id_district=$districtRel");
                if ($query->result()) {
                        return $query->result()[0];
                } else {
                        return $query->result();
                }
        }
        /* Get About Info */
        public function getAboutInfo()
        {
                $query = $this->db->query("SELECT * FROM about WHERE id_lang=1");
                if ($query->result()) {
                        return $query->result()[0];
                } else {
                        return $query->result();
                }
        }

        /* Get Estate Types */
        public function getEstateTypes()
        {
                $query = $this->db->query("SELECT * FROM category WHERE id_lang=1");
                return $query->result();
                
        }
        public function getEstateSubtypes($categoriRel)
        {
                $query = $this->db->query("SELECT * FROM subcategory WHERE categoryRel=$categoriRel AND id_lang=1 ");
                
                return $query->result();
        }
}
