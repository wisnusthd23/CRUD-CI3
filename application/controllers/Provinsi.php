<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_provinsi');
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Provinsi";

        $data['provinsi'] = $this->M_provinsi->getAllprovinsi();
        $this->load->view('template/header', $data);
        $this->load->view('provinsi/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['judul'] = "Tambah Data Provinsi";
        $data['provinsi'] = $this->M_provinsi->getAllprovinsi();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['semester'] = $this->M_semester->getAllSemester();

        $this->form_validation->set_rules('provinsi', 'Nama Provinsi', 'required', [
            'required' => 'Form Nama Provinsi Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('provinsi/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_provinsi->tambahData();
            $this->session->set_flashdata('flash', 'Berhasil Ditambahkan!');
            redirect('provinsi');
        }
    }

    public function hapus($id_provinsi)
    {
        $this->M_provinsi->hapusData($id_provinsi);
        $this->session->set_flashdata('hapus', 'Berhasil Dihapus!');
        redirect('provinsi');
    }

    public function edit($id_provinsi)
    {

        $data['judul'] = "Edit Data Provinsi";
        $data['provinsi'] = $this->M_provinsi->getprovinsiById($id_provinsi);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
            'required' => 'Form Provinsi Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('provinsi/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_provinsi->ubahData();
            $this->session->set_flashdata('flash', 'Berhasil Diubah!');
            redirect('provinsi');
        }
    }

}

/* End of file Provinsi.php */
