<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateBookModel extends CI_Model {

    public function save_data($title,$content) {

        $data = array(
            'title'=> $title,
            'content'=> $content
        );

        $this->db->insert('books', $data);
    }

}
?>