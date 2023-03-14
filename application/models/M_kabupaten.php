<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kabupaten extends CI_Model {

    public function getAllkabupaten()
    {
        return $this->db->get('kabupaten')->result_array();
    }
    public function tambahData()
    {
        $data = [
            "kabupaten" => $this->input->post('kabupaten', true)
        ];

        $this->db->insert('kabupaten', $data);
    }

    public function hapusData($id_kabupaten)
    {
        // $this->db->where('id_provin$id_kabupaten', $id_kabupaten);
        $this->db->delete('kabupaten', ['id_kabupaten' => $id_kabupaten]);
    }

    public function getkabupatenById($id_kabupaten)
    {
        return $this->db->get_where('kabupaten', ['id_kabupaten' => $id_kabupaten])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "kabupaten" => $this->input->post('kabupaten', true)
        ];

        $this->db->where('id_kabupaten', $this->input->post('id_kabupaten'));
        $this->db->update('kabupaten', $data);
    }

}

/* End of file M_kabupaten.php */
