<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->main();
    }

    public function _remap($method) {
        $this->load->view('Header_v');

        $this->load->view('Menus_v');

        if (method_exists($this, $method)) {
            $this->{"{$method}"}();
        }

        $this->load->view('Footer_v');
    }

    function main() {
        $this->load->view('index_v');
    }

}
