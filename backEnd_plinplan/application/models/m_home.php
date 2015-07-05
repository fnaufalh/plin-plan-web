<?php 
    class m_home extends CI_Model{
        public function __contruct(){
            parent::__construct();
        }
        public function countUser(){
            $this->db->select('id');
            $this->db->from('user_plinplan');
            return $this->db->get()->num_rows();
        }
        public function countPost(){
            $this->db->select('id');
            $this->db->from('post');
            return $this->db->get()->num_rows();
        }
        public function countPesan(){
            $this->db->select('id');
            $this->db->from('pesan');
            return $this->db->get()->num_rows();
        }
        public function countReport(){
            $this->db->select('id');
            $this->db->from('report');
            return $this->db->get()->num_rows();
        }
    }
?>