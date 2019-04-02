<?php

class Overview extends CI_Controller {

    function __construct(){
        parent::__construct();
        // $this->load->model('maintenancemodel');
    }

    public function index() {

        $this->load->view('overview');
    }
}