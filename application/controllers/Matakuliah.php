<?php

class Matakuliah extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Tambah Matakuliah';
        $this->load->view('template/header', $data);
        $this->load->view('template/footer');
        $this->load->view('matakuliah/index', $data);
    }

    public function tambah()
    {
        $data['judul'] = "Form Tambah Data Mata Kuliah";
        $this->load->library('form_validation'); // Memuat library form_validation

        // Set validation rules
        $this->form_validation->set_rules('matakuliah', 'Nama Mata Kuliah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('matakuliah/index', $data); // Memuat view yang sesuai
            $this->load->view('template/footer');
        } else {
            $this->load->model('Matakuliah_model'); // Memuat model sebelum menggunakannya
            $this->Matakuliah_model->tambahDataMatakuliah();
            $this->session->set_flashdata('flash', 'Data Mata Kuliah Ditambahkan');
            redirect('matakuliah/index'); // Redirect ke halaman index setelah menambahkan data
        }
    }
}
