<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    //load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model');
        $this->load->model('kategori_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('berita_model');
    }

    //Halaman Utama website home
    public function index()
    {
        $site           = $this->konfigurasi_model->listing();
        $berita          = $this->berita_model->listing();
        $kategori       = $this->konfigurasi_model->nav_produk();
        $produk         = $this->produk_model->home();

        $data = array(
            'title'      => $site->namaweb.' | '.$site->tagline,
            'keywords'   => $site->keywords,
            'deskripsi'  => $site->deskripsi,
            'site'       => $site,
            'berita'     => $berita,
            'kategori'   => $kategori,
            'produk'     => $produk,
            'isi'        =>  'home/list'
        );
        $this->load->view('layouta/wrapper', $data, FALSE);
    }
}
