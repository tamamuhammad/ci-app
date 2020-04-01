<?php 

class Peoplemodel extends CI_model {
    public function getPeople($limit, $start, $keyword = null){
        if($keyword){
            $this->db->like('nama', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('alamat', $keyword);
        }
        return $this->db->get('people', $limit, $start)->result_array();
    }

    public function countPeople(){
        return $this->db->get('people')->num_rows();
    }
}