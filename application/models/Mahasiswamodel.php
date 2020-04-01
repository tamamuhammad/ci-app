<?php 

class Mahasiswamodel extends CI_model {
    public function getAllMahasiswa(){
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahMahasiswa(){
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'jurusan' => $this->input->post('jurusan'),
            'hp' => $this->input->post('hp')
        ];

        $this->db->insert('mahasiswa', $data);
    }
    
    public function hapusMahasiswa($id){
        // $this->db->where('id', $id);
        $this->db->delete('mahasiswa', ['id' => $id]);
    }
    
    public function getMahasiswa($id){
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }
    
    public function editMahasiswa(){
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'jurusan' => $this->input->post('jurusan'),
            'hp' => $this->input->post('hp')
        ];

        $this->db->update('mahasiswa', $data, ['id' => $this->input->post('id')]);
    }

    public function cariMahasiswa(){
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('hp', $keyword);

        return $this->db->get('mahasiswa')->result_array();
    }
}