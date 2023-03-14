<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_provinsi extends CI_Model {

    public function getAllprovinsi()
    {
        return $this->db->get('provinsi')->result_array();
    }
    public function tambahData()
    {
        $data = [
            "provinsi" => $this->input->post('provinsi', true)
        ];

        $this->db->insert('provinsi', $data);
    }

    public function hapusData($id_provinsi)
    {
        // $this->db->where('id_provin$id_provinsi', $id_provinsi);
        $this->db->delete('provinsi', ['id_provinsi' => $id_provinsi]);
    }

    public function getprovinsiById($id_provinsi)
    {
        return $this->db->get_where('provinsi', ['id_provinsi' => $id_provinsi])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "provinsi" => $this->input->post('provinsi', true)
        ];

        $this->db->where('id_provinsi', $this->input->post('id_provinsi'));
        $this->db->update('provinsi', $data);
    }

}

/* End of file M_provinsi.php */
