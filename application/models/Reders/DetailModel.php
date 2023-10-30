<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailModel extends CI_Model {

    public function where_book($id) {

       $query = $this->db->get_where('books',array('id'=> $id));

       return $query->row();
    }

    public function update_book($id, $title, $content) {

        $data = array (
            'title'=> $title,
            'content'=> $content
        );

        $where = array (
            'id'=> $id
        );

        $this->db->update('books', $data, $where);
    }

    public function delete_book($id) {

        $this->db->where('id', $id);
        $this->db->delete('books');

    }

    public function get_book($id) {

        $query = $this->db->get_where('books', array('id' => $id));

        return $query->result();
    }

    

}


?>