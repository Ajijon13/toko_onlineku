<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
    }

    //listing data produk
    public function index()
    {

        $site               = $this->konfigurasi_model->listing();
        $data = array(
            'title'             =>  'Kontak ',
            'site'              =>  $site,
            'isi'               =>  'kontak/list'
        );

        $this->load->view('layoutb/wrapper', $data, FALSE);
    }

}
