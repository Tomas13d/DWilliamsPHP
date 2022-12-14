<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Estate_model extends CI_Model
{
        /* Estates */
        public function getSingleEstateActive($estateRel)
        {
                $query = $this->db->query("SELECT * FROM estate WHERE (rel=$estateRel AND ACTIVE= 1) AND id_lang=1");
                $result = $query->result()[0];
                $photos = $this->Estate_model->getPhotosFromEstate($estateRel);
                $haveDef = true;
                if (count($photos) > 0) {
                        foreach ($photos as $index => $photo) {
                                if ($photo->def  === "1") {
                                        $haveDef = false;
                                }
                        }
                        if ($haveDef && $photos[0]) {
                                $photos[0]->def = "1";
                        }
                }
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
                $query = $this->db->query("SELECT * FROM gallery_estate WHERE gallery_estate.rel=$estateRel ORDER BY def DESC");
                return $query->result();
        }
        public function getPhotosFromEstateLimited($estateRel, $limit)
        {
                $query = $this->db->query("SELECT * FROM gallery_estate WHERE gallery_estate.rel=$estateRel ORDER BY def DESC LIMIT $limit");
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
        public function getSingleEstateType($categoryRel)
        {
                $query = $this->db->query("SELECT * FROM category WHERE rel=$categoryRel");
                return $query->result()[0];
        }
        public function getEstateSubtypes($subcategoriesRel)
        {
                $request = "SELECT * FROM subcategory WHERE";
                if (gettype($subcategoriesRel) === "array") {
                        foreach ($subcategoriesRel as $index => $rel) {
                                if ($index === 0) {
                                        $request = $request . " " . "categoryRel=" . $rel . " ";
                                } else {
                                        $request = $request . "OR" . " " . "categoryRel=" . $rel . " ";
                                }
                        }
                } else {
                        $request = "SELECT * FROM subcategory";
                }

                $query = $this->db->query($request);
                return $query->result();
        }
        /* FILTERED STATES */
        public function dinamicRequestFilter($queryArray)
        {
                $request = "SELECT * FROM estate WHERE (id_lang=1 AND active=1) ";
                foreach ($queryArray as $queryName => $arrayOfRel) {
                        $longQuery = "";
                        foreach ($arrayOfRel as $index => $rel) {
                                if ($index === count($arrayOfRel) - 1) {
                                        $longQuery = $longQuery . " " . $queryName . "=" . $rel;
                                } else {
                                        $longQuery = $longQuery . " " . $queryName . "=" . $rel . " " . "OR";
                                }
                        }
                        $request = $request . " " . "AND" . " " . "(" . $longQuery . ")";
                }
                $query = $this->db->query($request);
                return $query->result();
        }
        /* ACTIVE ESTATES CITYS AND ZONES  */
        public function getActiveCityZones()
        {
                $query = $this->db->query("SELECT DISTINCT C.name disctrict, S.name city, C.id_city rel
                  FROM estate AS E
                  INNER JOIN city AS C ON E.cityID=C.id_city 
                  INNER JOIN state AS S ON E.stateID=S.id_state
                  WHERE E.active=1");
                return $query->result();
        }
}
