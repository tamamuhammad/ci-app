<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswamodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswamodel->getAllMahasiswa();
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Mahasiswamodel->cariMahasiswa();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('hp', 'HP', 'required|numeric');

        $data['judul'] = 'Tambah Mahasiswa';
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswamodel->tambahMahasiswa();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswamodel->hapusMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswamodel->getMahasiswa($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswamodel->getMahasiswa($id);
        $data['jurusan'] = ['Teknik Kendaraan Ringan', 'Teknik Sepeda Motor', 'Teknik Komputer dan Jaringan', 'Rekayasa Perangkat Lunak', 'Busana Butik'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('hp', 'HP', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswamodel->editMahasiswa();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('mahasiswa');
        }
    }

    public function pdf($id)
    {
        $data['mahasiswa'] = $this->Mahasiswamodel->getMahasiswa($id);
        $this->load->view('pdf', $data);
        $html = $this->output->get_output();
        $this->dompdf->set_paper('A4', 'landscape');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Detail ' . $data['mahasiswa']['nama'] . '.pdf', ['Attachment' => 0]);
    }
}
