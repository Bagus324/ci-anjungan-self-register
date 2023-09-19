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
} 
?>