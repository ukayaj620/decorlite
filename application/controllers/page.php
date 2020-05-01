<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function about() {
        $this->load->view('page/about');
    }

    public function contact() {
        $this->load->view('page/contact');
    }
    
    public function cart() {
        $this->load->view('page/cart');
    }

    public function signin() {
        $this->load->view('page/signin');
    }

    public function signup() {
        $this->load->view('page/signup');
    }
}