<?php

    class Auth_model extends CI_Model {
        public function login($params=array()) {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('username', $params['username']);
            $this->db->where('password', $params['password']);
            $this->db->where('is_deleted', 0);
            $this->db->limit(1);

            return $this->db->get()->row();
        }
    }