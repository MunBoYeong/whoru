<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->model('user_m');
    }

    /*
     * 주소에서 메서드가 생략되었을 때 실행되는 기본 메서드 
     */
    public function index() {
        if($this->session->userdata['is_admin'] == FALSE){
            redirect('/');
        }
        $this->memlist();
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
     * 회원관리 회원 목록
     */
    public function memlist(){
        if($this->session->userdata['is_admin'] == FALSE){
            redirect('/');
        }
        
        $result = $this->user_m->memlist();
        
        $this->load->view('admin/memberlist_v', $result);
    }
}

?>

