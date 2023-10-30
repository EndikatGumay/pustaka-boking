<?php
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-siswa');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('Nama', 'Nama Siswa', 'required|min_length[3]', [
            'required' => 'Nama Harus diisi',
            'min_length' =>'nama Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('nis', 'Nis Siswa', 'required|min_length[3]', [
            'required' => 'Nis Harus diisi',
            'min_length' => 'Nis terlalu pendek'
        ]);
    if ($this->form_validation->run() != true) {
        $this->load->view('view-form-siswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'ttl' => $this->input->post('ttl'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'kelamin' => $this->input->post('kelamin'),
                'agama' => $this->input->post('agama')
            ];
              $this->load->view('view-data-siswa', $data);
    }
    }
}
?>