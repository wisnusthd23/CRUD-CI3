<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengusul extends CI_Model
{

    public function getAllpengusul()
    {
        // return $this->db->get('pengusul')->result_array();
        $this->db->select('*');
        $this->db->from('pengusul');

        $this->db->join('provinsi', 'pengusul.id_provinsi = provinsi.id_provinsi', 'left');
        $this->db->join('kabupaten', 'pengusul.id_kabupaten = kabupaten.id_kabupaten', 'left');
        $this->db->join('kelurahan', 'pengusul.id_kelurahan = kelurahan.id_kelurahan', 'left');
        $this->db->join('kecamatan', 'pengusul.id_kecamatan = kecamatan.id_kecamatan', 'left');
        return $this->db->get()->result_array();

    }

    public function getAllprovinsi()
    {
        return $this->db->get('provinsi')->result();
    }
    public function getAllkabupaten()
    {
        return $this->db->get('kabupaten')->result();
    }
    public function getAllkelurahan()
    {
        return $this->db->get('kelurahan')->result();
    }
    public function getAllkecamatan()
    {
        return $this->db->get('kecamatan')->result();
    }

    public function tambahData($data)
    {
        

        $this->db->insert('pengusul', $data);
    }

    public function hapusData($id)
    {
        // $this->db->where('id_sks', $id_sks);
        $this->db->delete('pengusul', ['id' => $id]);
    }

    public function getpengusulById($id)
    {
        return $this->db->get_where('pengusul', ['id' => $id])->row_array();
    }

    public function ubahData()
    {
        $data = [
            'nama_pengusul' => $this->input->post('nama_pengusul', true),
            'alamat' => $this->input->post('alamat', true),
            'id_provinsi' => $this->input->post('id_provinsi', true),
            'id_kabupaten' => $this->input->post('id_kabupaten', true),
            'id_kelurahan' => $this->input->post('id_kelurahan', true),
            'id_kecamatan' => $this->input->post('id_kecamatan', true),
            'image' => $this->input->post('image', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pengusul', $data);
    }
    // public function getWhereSks($aktif)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_matkul');

    //     $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
    //     $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
    //     $this->db->where($aktif);
    //     return $this->db->get()->result_array();

    //     // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    // }
    // public function getWhereSks2($aktif2)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_matkul');

    //     $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
    //     $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
    //     $this->db->where($aktif2);
    //     return $this->db->get()->result_array();

    //     // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    // }
    // public function getWhereSks3($aktif3)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_matkul');

    //     $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
    //     $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
    //     $this->db->where($aktif3);
    //     return $this->db->get()->result_array();

    //     // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    // }
    // public function getWhereSks4($aktif4)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_matkul');

    //     $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
    //     $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
    //     $this->db->where($aktif4);
    //     return $this->db->get()->result_array();

    //     // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    // }
    // public function getWhereSks5($aktif5)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_matkul');

    //     $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
    //     $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
    //     $this->db->where($aktif5);
    //     return $this->db->get()->result_array();

    //     // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    // }
    // public function getWhereSks6($aktif6)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_matkul');

    //     $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
    //     $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
    //     $this->db->where($aktif6);
    //     return $this->db->get()->result_array();

    //     // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    // }
    // public function getWherePilihan6($pilihan6)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_pilihan');

    //     $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_pilihan.id_semester', 'left');
    //     $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_pilihan.id_sks', 'left');
    //     $this->db->where($pilihan6);
    //     return $this->db->get()->result_array();

    //     // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    // }
    // public function getWhereSks7($aktif7)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_matkul');

    //     $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
    //     $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
    //     $this->db->where($aktif7);
    //     return $this->db->get()->result_array();

    //     // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    // }
    // public function getWherePilihan7($pilihan7)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_pilihan');

    //     $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_pilihan.id_semester', 'left');
    //     $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_pilihan.id_sks', 'left');
    //     $this->db->where($pilihan7);
    //     return $this->db->get()->result_array();

    //     // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    // }
    // public function getWhereSks8($aktif8)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_matkul');

    //     $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
    //     $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
    //     $this->db->where($aktif8);
    //     return $this->db->get()->result_array();

    //     // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    // }
}

/* End of file M_sks.php */
