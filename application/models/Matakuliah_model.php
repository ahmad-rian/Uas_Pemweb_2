<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah_model extends CI_Model
{
    public function tambahDataMatakuliah()
    {
        $data = [
            'nama_matakuliah' => $this->input->post('matakuliah')
        ];

        $this->db->insert('matakuliah', $data);
    }
}
