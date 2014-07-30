<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->library('form_validation');
    }
    
    /*
     * 주소에서 메서드가 생략되었을 때 실행되는 기본 메서드 
     */
    public function index() {
        $this->Login();
    }

    /*
     * 사이트 헤더, 푸터가 자동으로 추가
     */
    public function _remap($method) {
        $this->load->view('member/Header_v');

        if (method_exists($this, $method)) {
            $this->{"{$method}"}();
        }

        $this->load->view('member/Footer_v');
    }

    /*
     * 로그인
     */
    function Login() {
        $this->load->view('member/Login_v');
    }

    /*
     * 회원가입
     */
    function Join() {  
        if( $_POST ){
            
        }
        else{
            $this->load->view('member/Join_v');
        }
        
        
        /*$this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('passwd', 'password', 'required|min_length[4]|max_length[30]|matches[passwd_chk]');
        $this->form_validation->set_rules('passwd_chk', 'password confirm', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('nickname', 'nickname', 'required');
        $this->form_validation->set_rules('dept', 'department', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('member/Join_v');
        } else {
            $hash = hash("sha512", $this->input->post('passwd'));
            echo "<script>alert(".$hsah.");</script>";
            $user_data = array(
                'table' => $this->uri->segment(2),
                'uid' => $this->input->post('uid', TRUE),
                'nickname' => $this->input->post('nickname', TRUE),
                'password' => $hash,
                'phone' => $this->input->post('phone'),
                'bankname' => $this->input->post('bankname'),
                'banknum' => $this->input->post('banknum'),
                'bankuser' => $this->input->post('bankuser')
            );

            $this->load->model('user_m');
            $result = $this->user_m->add($user_data);

            echo "<script>alert('회원가입 되었습니다.');</script>";
            redirect('/main/');*/
        }
        
        function Join_val(){
            echo "<script>alert(".$this->input->post('passwd').");</script>";
        }
    }
?>
