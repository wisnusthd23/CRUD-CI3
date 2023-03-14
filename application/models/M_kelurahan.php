<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelurahan extends CI_Model {

    public function getAllkelurahan()
    {
        return $this->db->get('kelurahan')->result_array();
    }
    public function tambahData()
    {
        $data = [
            "kelurahan" => $this->input->post('kelurahan', true)
        ];

        $this->db->insert('kelurahan', $data);
    }

    public function hapusData($id_kelurahan)
    {
        // $this->db->where('id_provin$id_kelurahan', $id_kelurahan);
        $this->db->delete('kelurahan', ['id_kelurahan' => $id_kelurahan]);
    }

    public function getkelurahanById($id_kelurahan)
    {
        return $this->db->get_where('kelurahan', ['id_kelurahan' => $id_kelurahan])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "kelurahan" => $this->input->post('kelurahan', true)
        ];

        $this->db->where('id_kelurahan', $this->input->post('id_kelurahan'));
        $this->db->update('kelurahan', $data);
    }

}

/* End of file M_kelurahan.php */
