<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belanja extends CI_Controller
{

    //load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model');
        $this->load->model('kategori_model');
        $this->load->model('konfigurasi_model');
    }

    //halaman belanja
    public function index()
    {
    }

    //tambah ke kernjang
    public function add()
    {
        //ambil data dari form
        $id                 = $this->input->post('id');
        $qty                = $this->input->post('qty');
        $price              = $this->input->post('price');
        $name               = $this->input->post('name');
        $redirect_page      = $this->input->post('redirect_page');
        // proses memasukkan ke keranjang
        $data   = array(
            'id        = $id,
            qty       = $qty,
            price    = $price,
            name     = $name'
        );
        $this->cart->insert($data);
        redirect($redirect_page,'refresh');
    }
}
