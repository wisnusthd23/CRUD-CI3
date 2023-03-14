<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupaten extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_kabupaten');
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "kabupaten";

        $data['kabupaten'] = $this->M_kabupaten->getAllkabupaten();
        $this->load->view('template/header', $data);
        $this->load->view('kabupaten/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['judul'] = "Tambah Data kabupaten";
        $data['kabupaten'] = $this->M_kabupaten->getAllkabupaten();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['semester'] = $this->M_semester->getAllSemester();

        $this->form_validation->set_rules('kabupaten', 'Nama kabupaten', 'required', [
            'required' => 'Form Nama kabupaten Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('kabupaten/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_kabupaten->tambahData();
            $this->session->set_flashdata('flash', 'Berhasil Ditambahkan!');
            redirect('kabupaten');
        }
    }

    public function hapus($id_kabupaten)
    {
        $this->M_kabupaten->hapusData($id_kabupaten);
        $this->session->set_flashdata('hapus', 'Berhasil Dihapus!');
        redirect('kabupaten');
    }

    public function edit($id_kabupaten)
    {

        $data['judul'] = "Edit Data kabupaten";
        $data['kabupaten'] = $this->M_kabupaten->getkabupatenById($id_kabupaten);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kabupaten', 'kabupaten', 'required', [
            'required' => 'Form kabupaten Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('kabupaten/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_kabupaten->ubahData();
            $this->session->set_flashdata('flash', 'Berhasil Diubah!');
            redirect('kabupaten');
        }
    }

}

/* End of file Provinsi.php */
