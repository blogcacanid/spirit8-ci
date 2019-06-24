<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spirit8 extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }


    public function index(){
        $this->load->view('view_spirit8');
    }
}
