<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelurahan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_kelurahan');
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "kelurahan";

        $data['kelurahan'] = $this->M_kelurahan->getAllkelurahan();
        $this->load->view('template/header', $data);
        $this->load->view('kelurahan/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['judul'] = "Tambah Data kelurahan";
        $data['kelurahan'] = $this->M_kelurahan->getAllkelurahan();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['semester'] = $this->M_semester->getAllSemester();

        $this->form_validation->set_rules('kelurahan', 'Nama kelurahan', 'required', [
            'required' => 'Form Nama kelurahan Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('kelurahan/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_kelurahan->tambahData();
            $this->session->set_flashdata('flash', 'Berhasil Ditambahkan!');
            redirect('kelurahan');
        }
    }

    public function hapus($id_kelurahan)
    {
        $this->M_kelurahan->hapusData($id_kelurahan);
        $this->session->set_flashdata('hapus', 'Berhasil Dihapus!');
        redirect('kelurahan');
    }

    public function edit($id_kelurahan)
    {

        $data['judul'] = "Edit Data kelurahan";
        $data['kelurahan'] = $this->M_kelurahan->getkelurahanById($id_kelurahan);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kelurahan', 'kelurahan', 'required', [
            'required' => 'Form kelurahan Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('kelurahan/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_kelurahan->ubahData();
            $this->session->set_flashdata('flash', 'Berhasil Diubah!');
            redirect('kelurahan');
        }
    }

}

/* End of file Provinsi.php */
