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
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
            'required' => 'Kelas Harus diisi',
            'min_length' => 'kelas terlalu pendek'
        ]);
        $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required|min_length[3]', [
            'required' => 'ttl Harus diisi',
            'min_length' => 'ttl terlalu pendek'
        ]);
        $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required|min_length[3]', [
            'required' => 'tempat Harus diisi',
            'min_length' => 'tempat terlalu pendek'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [
            'required' => 'alamat Harus diisi',
            'min_length' => 'alamat terlalu pendek'
        ]);
        $this->form_validation->set_rules('kelamin', 'Kelamin Siswa', 'required|min_length[3]', [
            'required' => 'kelamin Harus diisi',
            'min_length' => 'kelamin terlalu pendek'
        ]);
        $this->form_validation->set_rules('Agama', 'Agama Siswa', 'required|min_length[3]', [
            'required' => 'agama Harus diisi',
            'min_length' => 'agama terlalu pendek'
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