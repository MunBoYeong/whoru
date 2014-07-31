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
        $this->load->model('user_m');
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

    public function Login() {
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        $this->form_validation->set_error_delimiters('<font color=red>', '</font>&nbsp;');
        $this->form_validation->set_rules('email', '이메일', 'required|valid_email|xss_clean');
        $this->form_validation->set_rules('passwd', '패스워드', 'required|xss_clean|min_length[4]|max_length[20]');

        if ($this->form_validation->run() == false) {
            $this->load->view('member/Login_v');
        } else {
            $hash = hash("sha512", $this->input->post('passwd'));

            $auth_data = array(
            'table' => 'members',
            'email' => $this->input->post('email', TRUE),
            'passwd' => $hash
            );

            $result = $this->user_m->login($auth_data);

            if($result){
                $newdata = array(
                    'email'     => $result->email,
                    'name'      => $result->name,
                    'nickname'  => $result->nickname,
                    'dept'      => $result->dept,
                    'is_login'  => TRUE
                );
                
                $this->session->set_userdata($newdata);
                redirect('/');
            }
            else{
                redirect('/user/Login');
            }
        }
    }

    /*
     * 회원가입
     */

    public function Join() {
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        $this->form_validation->set_error_delimiters('<font color=red>', '</font>&nbsp;');
        $this->form_validation->set_rules('email', '이메일', 'required|valid_email|xss_clean|callback_email_check');
        $this->form_validation->set_rules('passwd', '패스워드', 'required|xss_clean|min_length[4]|max_length[20]|matches[passwd_chk]');
        $this->form_validation->set_rules('passwd_chk', '패스워드 확인', 'required|xss_clean');
        $this->form_validation->set_rules('name', '이름', 'required|xss_clean');
        $this->form_validation->set_rules('nickname', '닉네임', 'required|xss_clean|callback_nickname_check');
        $this->form_validation->set_rules('dept', '학과', 'required|xss_clean');
        $this->form_validation->set_rules('confirm', '약관 동의', 'required|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->load->view('member/Join_v');
        } else {
            $hash = hash("sha512", $this->input->post('passwd'));

            $user_data = array(
            'table' => 'members',
            'email' => $this->input->post('email', TRUE),
            'passwd' => $hash,
            'name' => $this->input->post('name', TRUE),
            'nickname' => $this->input->post('nickname', TRUE),
            'dept' => $this->input->post('dept', TRUE)
            );

            $result = $this->user_m->user_add($user_data);

            if($result){
                redirect('/user/Login');
            }
            else{
                redirect('/user/Join');
            }
        }
    }

        /*
         * 이메일 중복체크
         */
    public function email_check($email) {
        if ($email) {
            $result = array();
            $this->db->where('email',$this->input->post('email',TRUE));
            $query = $this->db->get('members');
            $result = $query->row();
            //$sql = "SELECT email FROM members WHERE email='" . $email . "'";
            //$query = $this->db->query($sql);
            //$result = $query->row();

            if ($result) {
                $this->form_validation->set_message('email_check', $email . '은(는) 중복된 이메일입니다.');
                return FALSE;
            } else {
                return TRUE;
            }
        } else {
            return FALSE;
        }
    }

    /*
     * 닉네임 중복체크
     */

    public function nickname_check($nickname) {
        if ($nickname) {
            $result = array();
            $this->db->where(array('nickname'=>$this->input->post('nickname',TRUE)));
            $query = $this->db->get('members');
            $result = $query->row();
            //$sql = "SELECT nickname FROM members WHERE nickname='" . $nickname . "'";
            //$query = $this->db->query($sql);
            //$result = $query->row();

            if ($result) {
                $this->form_validation->set_message('nickname_check', $nickname . '은(는) 중복된 닉네임입니다.');
                return FALSE;
            } else {
                return TRUE;
            }
        } else {
            return FALSE;
        }
    }
    
    public function Logout(){
        $this->session->sess_destroy();
        
        redirect('/');
    }
}

?>
