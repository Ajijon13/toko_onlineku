<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    //Halaman Utama website home
    public function index()
    {
        $data = array(
            'title'      => 'Toko Propoin - Febri',
            'isi'        =>  'home/list'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
