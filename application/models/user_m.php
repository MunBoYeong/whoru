<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function user_add($user_array) {
        $user_data = array(
            'email' => $user_array['email'],
            'passwd' => $user_array['passwd'],
            'name' => $user_array['name'],
            'nickname' => $user_array['nickname'],
            'dept' => $user_array['dept'],
            'date_joined' => date("Y-m-d H:i:s"),
            'date_lastlogin' => date("Y-m-d H:i:s")
        );

        $result = $this->db->insert($user_array['table'], $user_data);

        return $result;
    }

    public function login($auth) {
        $result = array();
        $this->db->where(
                array(
                    'email'     => $auth['email'],
                    'passwd'    => $auth['passwd']
                    )
                );
        $query = $this->db->get('members');
        $result = $query->row();
        $num_rows = $query->num_rows();
        
        if($num_rows > 0){
            return $result;
        }
        else{
            return FALSE;
        }
    }

}

?>