<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');

    }
    public function cetak()
    {
        $DATA = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks'  => $this->input->post('sks')
        ];

        $this->load->view('view-data-matakuiah',$data);
    }
}