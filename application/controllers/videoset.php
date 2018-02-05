<?php

Class videoset extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');

        // Load database
        $this->load->model('user_model');
    }

    public function index() {
        die("videoset controller -> index()");
    }

    public function create() {
        die("todo: show empty form to create a new videoset");
    }

    public function edit($id) {
        die("todo: show form for id = $id to edit an existing videoset");
    }

    public function delete($id) {
        die("todo: delete id = $id and return to the index");
    }

}