<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->Login();
    }

    public function _remap($method) {
        $this->load->view('member/Header_v');

        if (method_exists($this, $method)) {
            $this->{"{$method}"}();
        }

        $this->load->view('member/Footer_v');
    }

    function Login() {
        $this->load->view('member/Login_v');
    }

    function Join() {
        $this->load->view('member/Join_v');
    }

}
