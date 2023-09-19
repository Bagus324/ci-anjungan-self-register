<?php

class Pages extends CI_Controller
{
    public function dokter_tujuan()
    {
        $this->load->view('dokter_tujuan');
    }

    public function dokter_tujuan_mid()
    {
        $this->load->view('dokter_tujuan_mid');
    }

    public function konfirmasi_data()
    {
        $this->load->view('konfirmasi_data');
    }
    
    public function data_pasien()
    {
        $this->load->view('data_pasien');
    }
} 
?>