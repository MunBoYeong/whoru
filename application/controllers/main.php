<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    /*
     * 주소에서 메서드가 생략되었을 때 실행되는 기본 메서드 
     */
    public function index() {
        $this->main();
    }
    /*
     * 사이트 헤더, 푸터가 자동으로 추가
     */
    public function _remap($method) {
        $this->load->view('Header_v');

        $this->load->view('Menus_v');

        if (method_exists($this, $method)) {
            $this->{"{$method}"}();
        }

        $this->load->view('Footer_v');
    }
    /*
     * 메인
     */
    function main() {
        $this->load->view('index_v');
    }
}
