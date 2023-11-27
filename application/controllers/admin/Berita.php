<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    //load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model');
    }

    //konfigurasi item
    public function index()
    {
        $berita   = $this->berita_model->listing();

        // validasi input

        $valid = $this->form_validation;

        $valid->set_rules(
            'judul_berita_1',
            'Judul Berita Pertama',
            'required',
            array(
                'required'   => '%s harus diisi'
            )
        );
        $valid->set_rules(
            'judul_berita_2',
            'Judul Berita Kedua',
            'required',
            array(
                'required'   => '%s harus diisi'
            )
        );


        if ($valid->run() === FALSE) {
            //end validasi

            $data = array(
                'title'         =>  'Berita Website',
                'berita'        =>  $berita,
                'isi'           =>  'admin/berita/list'
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
            //masuk database
        } else {
            $i = $this->input;

            $data = array(
                'id_berita'             => $berita->id_berita,
                'judul_berita_1'        => $i->post('judul_berita_1'),
                'judul_berita_2'        => $i->post('judul_berita_2'),
                'keterangan_1'          => $i->post('keterangan_1'),
                'keterangan_1'          => $i->post('keterangan_2'),
                );
            $this->berita_model->edit($data);
            $this->session->set_flashdata('sukses', 'Data Telah diupdate');
            redirect(base_url('admin/berita'), 'refresh');
        }
   
      
    }
}
