<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateBook extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Reders/CreateBookModel');
        $this->load->database();
        $this->load->helper('url');
    }
    
    public function index() {

        if ($this->input->post()) {

            $title = $this->input->post('title');
            $content = $this->input->post('content');
            
            $this->CreateBookModel->save_data($title,$content);

            redirect('../Reders');

        }

        $this->load->view('createBook_view');

    }

}

?>