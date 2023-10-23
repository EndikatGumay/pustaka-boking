<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. Selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('latihan_model1');
        $hasil = $this->latihan_model1->jumlah($n1, $n2);
        echo"<h1>AKUMAH PEMULA AJARIN DONG PUH SEPUH</h1>";
        echo "Hasil Penjumlahan dari ". $n1 ." + ". $n2 ." = "
        .$hasil;
    }
    public function jumlah($n1, $n2)
    {
        $this->load->model('latihan_model1');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->latihan_model1->jumlah($n1, $n2);
        
        $this->load->view('latihan_view1', $data);
    }
}   
?>