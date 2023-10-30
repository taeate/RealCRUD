<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class RedersModel extends CI_Model {

    public function get_list() {

        $query = $this->db->get('books');

        return $query->result();
        
    }
}


?>