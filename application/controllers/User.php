<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_pengusul');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Pengusul";

        $data['pengusul'] = $this->M_pengusul->getAllpengusul();
        // $this->load->view('template/header', $data);
        $this->load->view('user/index', $data);
        // $this->load->view('template/footer');
    }
}

/* End of file User.php */
