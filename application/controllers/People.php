<?php 

class People extends CI_Controller {

    public function index(){
        $data['judul'] = 'Daftar Orang';

        $this->load->model('Peoplemodel');

        if( $this->input->post('submit') ){
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->or_like('alamat', $data['keyword']);
        $this->db->from('people');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['people'] = $this->Peoplemodel->getPeople($config['per_page'], $data['start'], $data['keyword']);
        $data['total_rows'] = $config['total_rows'];
        
        $this->load->view('templates/header', $data);
        $this->load->view('people/index', $data);
        $this->load->view('templates/footer');
    }
}