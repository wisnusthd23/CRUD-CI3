<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_pengusul');
    }


    public function dashboard()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Dashboard";

        $data['pengusul'] = $this->M_pengusul->getAllpengusul();
        $this->load->view('template/header', $data);
        $this->load->view('pengusul/dashboard', $data);
        $this->load->view('template/footer');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Pengusul";

        $data['pengusul'] = $this->M_pengusul->getAllpengusul();
        $this->load->view('template/header', $data);
        $this->load->view('pengusul/index', $data);
        $this->load->view('template/footer');
    }

    
    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Tambah Data Pengusul";
        $data['pengusul'] = $this->M_pengusul->getAllpengusul();
        $data['provinsi'] = $this->M_pengusul->getAllprovinsi();
        $data['kabupaten'] = $this->M_pengusul->getAllkabupaten();
        $data['kelurahan'] = $this->M_pengusul->getAllkelurahan();
        $data['kecamatan'] = $this->M_pengusul->getAllkecamatan();

        $this->form_validation->set_rules('nama_pengusul', 'Nama Pengusul', 'required', [
            'required' => 'Form Nama Pengusul Harus di Isi!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('pengusul/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $config['upload_path']          = 'assetss/img/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['max_size']             = 1024;
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $file_name = $this->upload->data();

				// $this->load->library('image_lib', $config);
				$data = array(
					'nama_pengusul' => $this->input->post('nama_pengusul', true),
                        'alamat' => $this->input->post('alamat', true),
                        'id_provinsi' => $this->input->post('id_provinsi', true),
                        'id_kabupaten' => $this->input->post('id_kabupaten', true),
                        'id_kelurahan' => $this->input->post('id_kelurahan', true),
                        'id_kecamatan' => $this->input->post('id_kecamatan', true),
					    'image'	=> $file_name['file_name']
				);


            $this->M_pengusul->tambahData($data);
            $this->session->set_flashdata('flash', 'Berhasil Ditambahkan!');
            redirect('home');
        }
    }

    public function hapus($id)
    {
        $this->M_pengusul->hapusData($id);
        $this->session->set_flashdata('hapus', 'Berhasil Dihapus!');
        redirect('home');
    }

    public function edit($id)
    {

        $data['judul'] = "Edit Data Pengusul";
        $data['pengusul'] = $this->M_pengusul->getpengusulById($id);
        $data['provinsi'] = $this->M_pengusul->getAllprovinsi();
        $data['kabupaten'] = $this->M_pengusul->getAllkabupaten();
        $data['kelurahan'] = $this->M_pengusul->getAllkelurahan();
        $data['kecamatan'] = $this->M_pengusul->getAllkecamatan();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_pengusul', 'Nama Pengusul', 'required', [
            'required' => 'Form Nama Pengusul Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('pengusul/edit', $data);
            $this->load->view('template/footer');
        } else {
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '9048';
                $config['upload_path'] = './assetss/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assetss/img/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            $this->M_pengusul->ubahData();
            $this->session->set_flashdata('flash', 'Berhasil Diubah!');
            redirect('home');
        }
    }
}
    public function editprofile()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Edit Profile";

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/editprofile', $data);
            $this->load->view('template/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '9048';
                $config['upload_path'] = './assetss/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assetss/img/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">SELAMAT! profile berhasil di update!</div>');
            redirect('home/editprofile');
        }
    }

}

/* End of file Home.php */