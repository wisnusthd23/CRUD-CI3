<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kecamatan extends CI_Model {

    public function getAllkecamatan()
    {
        return $this->db->get('kecamatan')->result_array();
    }
    public function tambahData()
    {
        $data = [
            "kecamatan" => $this->input->post('kecamatan', true)
        ];

        $this->db->insert('kecamatan', $data);
    }

    public function hapusData($id_kecamatan)
    {
        // $this->db->where('id_provin$id_kecamatan', $id_kecamatan);
        $this->db->delete('kecamatan', ['id_kecamatan' => $id_kecamatan]);
    }

    public function getkecamatanById($id_kecamatan)
    {
        return $this->db->get_where('kecamatan', ['id_kecamatan' => $id_kecamatan])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "kecamatan" => $this->input->post('kecamatan', true)
        ];

        $this->db->where('id_kecamatan', $this->input->post('id_kecamatan'));
        $this->db->update('kecamatan', $data);
    }

}

/* End of file M_kecamatan.php */
