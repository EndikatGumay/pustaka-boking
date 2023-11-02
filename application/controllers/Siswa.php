<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function index()
    {
        $this->load->view('input_siswa');
    }

    public function submit()
    {
        // Process the submitted data here
        $data['nama'] = $this->input->post('nama');
        $data['nis'] = $this->input->post('nis');
        $data['kelas'] = $this->input->post('kelas');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['alamat'] = $this->input->post('alamat');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['agama'] = $this->input->post('agama');

        $this->load->view('hasil_submit', $data);
    }
}
