<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
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
        $this->form_validation->set_rules('email', '이메일', 'required|valid_email|callback_email_check');
        $this->form_validation->set_rules('passwd', '패스워드', 'required|min_length[4]|max_length[20]|matches[passwd_chk]');
        $this->form_validation->set_rules('passwd_chk', '패스워드 확인', 'required');
        $this->form_validation->set_rules('name', '이름', 'required');
        $this->form_validation->set_rules('nickname', '닉네임', 'required|callback_nickname_check');
        $this->form_validation->set_rules('dept', '학과', 'required');
        $this->form_validation->set_rules('confirm', '약관 동의', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('member/Join_v');
        } else {
              /*$hash = hash("sha512", $this->input->post('passwd'));

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
              redirect('/whoru/');
               * */
        }
        
        /*
         * 이메일 중복체크
         */
        function email_check($email){
            if($email){
                $result = array();
                $sql = "SELECT email FROM members WHERE email='".$email."'";
                $query = $this->db->query($sql);
                $result = $query->num_rows();
                
                if($result){
                    $this->form_validation->set_message('email_check', $email.'은(는) 중복된 아이디입니다.');
                    return FALSE;
                }
                else{
                    return TRUE;
                }
            }
            else{
                return FALSE;
            }
        }
        
        /*
         * 닉네임 중복체크
         */
        function nickname_check($nickname){
            if($nickname){
                $result = array();
                $sql = "SELECT nickname FROM members WHERE nickname='".$nickname."'";
                $query = $this->db->query($sql);
                $result = $query->row();
                
                if($result){
                    $this->form_validation->set_message('nickname_check', $nickname.'은(는) 중복된 아이디입니다.');
                    return FALSE;
                }
                else{
                    return TRUE;
                }
            }
            else{
                return FALSE;
            }
        }
    }
}

?>
