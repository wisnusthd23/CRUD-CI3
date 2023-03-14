<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_kecamatan');
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "kecamatan";

        $data['kecamatan'] = $this->M_kecamatan->getAllkecamatan();
        $this->load->view('template/header', $data);
        $this->load->view('kecamatan/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['judul'] = "Tambah Data kecamatan";
        $data['kecamatan'] = $this->M_kecamatan->getAllkecamatan();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['semester'] = $this->M_semester->getAllSemester();

        $this->form_validation->set_rules('kecamatan', 'Nama kecamatan', 'required', [
            'required' => 'Form Nama kecamatan Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('kecamatan/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_kecamatan->tambahData();
            $this->session->set_flashdata('flash', 'Berhasil Ditambahkan!');
            redirect('kecamatan');
        }
    }

    public function hapus($id_kecamatan)
    {
        $this->M_kecamatan->hapusData($id_kecamatan);
        $this->session->set_flashdata('hapus', 'Berhasil Dihapus!');
        redirect('kecamatan');
    }

    public function edit($id_kecamatan)
    {

        $data['judul'] = "Edit Data kecamatan";
        $data['kecamatan'] = $this->M_kecamatan->getkecamatanById($id_kecamatan);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required', [
            'required' => 'Form kecamatan Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('kecamatan/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_kecamatan->ubahData();
            $this->session->set_flashdata('flash', 'Berhasil Diubah!');
            redirect('kecamatan');
        }
    }

}

/* End of file Provinsi.php */
