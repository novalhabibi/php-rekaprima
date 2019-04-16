<?php

class Overview extends CI_Controller {

    function __construct(){
        parent::__construct();
        // $this->load->model('maintenancemodel');
    }

    public function index() {

        $this->load->view('overview');
    }

    public function aboutus(){
        $this->load->view('aboutus');
    }

    public function sejarah(){
        $this->load->view('sejarah');
    }

    public function contact(){
        $this->load->view('contact');
    }

    public function visimisi(){
        $this->load->view('visimisi');
    }

    public function smart(){
        $this->load->view('smart');
    }

    public function management()
    {
        $this->load->view('management');
    }

    public function allnews()
    {
        $this->load->view('allnews');
    }

}