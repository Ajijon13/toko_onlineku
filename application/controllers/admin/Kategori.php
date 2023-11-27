<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    //load Modal
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
        //proteksi halaman
        $this->simple_login->cek_login();
    }

    //data kategori
    public function index()

    {
        $kategori = $this->kategori_model->listing();

        $data = array(
            'title'     =>  'Data Kategori Produk',
            'kategori'      =>  $kategori,
            'isi'       =>  'admin/kategori/list'
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    //tambah kategori
    public function tambah()
    {
        $kategori = $this->kategori_model->listing();
        // validasi input

        $valid = $this->form_validation;

        $valid->set_rules(
            'nama_kategori',
            'Nama Kategori',
            'required|is_unique[Kategori.nama_kategori]',
            array(
                'required'   => '%s harus diisi',
                'is_unique'     => '%s sudah ada. Buat kategori baru'
            )
        );

        if ($valid->run()) {

            $config['upload_path']   = './assets/upload/kategori/image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2400'; //dalam kb
            $config['max_width']     = '2024';
            $config['max_height']    = '2024';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                //end validasi
                $data = array(
                    'title'     =>  'Tambah Kategori',
                    'kategori'  =>  $kategori,
                    'error'     =>  $this->upload->display_errors(),
                    'isi'       =>  'admin/kategori/tambah'
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);
                //masuk database
            } else {
                $upload_gambar = array('upload_data' => $this->upload->data());

                //crearte thumbnail gambar
                $config['image_library']    = 'gd2';
                $config['source_image']     = './assets/upload/kategori/image/' . $upload_gambar['upload_data']['file_name'];
                //lokasi folder thumbnail
                $config['new_image']        = './assets/upload/kategori/image/thumbs/';
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']   = TRUE;
                $config['width']            = 250; //pixel
                $config['height']           = 250; //pixel
                $config['thumb_marker']     = '';

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
                //end thumbnail gambar

                $i = $this->input;
                $slug_kategori = url_title($this->input->post('nama_kategori'), 'dash', TRUE);

                $data = array(
                    'slug_kategori'         => $slug_kategori,
                    'nama_kategori'         => $i->post('nama_kategori'),
                    'urutan'                => $i->post('urutan'),
                    'gambar'                => $upload_gambar['upload_data']['file_name']
                );
                $this->kategori_model->tambah($data);
                $this->session->set_flashdata('sukses', 'Data Telah ditambah');
                redirect(base_url('admin/kategori'), 'refresh');
            }
        }
        //end masuk database
        $data = array(
            'title'     =>  'Tambah Kategori',
            'kategori'  =>  $kategori,
            'isi'       =>  'admin/kategori/tambah'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    //edit kategori
    public function edit($id_kategori)
    {
        $kategori = $this->kategori_model->detail($id_kategori);
        // validasi input

        $valid = $this->form_validation;

        $valid->set_rules(
            'nama_kategori',
            'Nama Kategori',
            'required',
            array('required'   => '%s harus diisi')
        );

        if ($valid->run()) {
            //check jika gambar diganti
            if (!empty($_FILES['gambar']['name'])) {

                $config['upload_path']   = './assets/upload/kategori/image/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2400'; //dalam kb
                $config['max_width']     = '2024';
                $config['max_height']    = '2024';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    //end validasi
                    $data = array(
                        'title'     =>  'Edit Produk: ' . $kategori->nama_kategori,
                        'kategori'  =>  $kategori,
                        'error'     =>  $this->upload->display_errors(),
                        'isi'       =>  'admin/kategori/edit'
                    );
                    $this->load->view('admin/layout/wrapper', $data, FALSE);

                    //masuk database
                } else {
                    $upload_gambar = array('upload_data' => $this->upload->data());

                    //crearte thumbnail gambar
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './assets/upload/kategori/image/' . $upload_gambar['upload_data']['file_name'];
                    //lokasi folder thumbnail
                    $config['new_image']        = './assets/upload/kategori/image/thumbs/';
                    $config['create_thumb']     = TRUE;
                    $config['maintain_ratio']   = TRUE;
                    $config['width']            = 250; //pixel
                    $config['height']           = 250; //pixel
                    $config['thumb_marker']     = '';

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();
                    //end thumbnail gambar

                    $i              = $this->input;
                    //slug kategori
                    $slug_kategori  = url_title($this->input->post('nama_kategori'), 'dash', TRUE);

                    $data = array(
                        'id_kategori'   => $id_kategori,
                        'slug_kategori' => $slug_kategori,
                        'nama_kategori' => $i->post('nama_kategori'),
                        'urutan'        => $i->post('urutan'),
                        'gambar'        => $upload_gambar['upload_data']['file_name']
                    );
                    $this->kategori_model->edit($data);
                    $this->session->set_flashdata('sukses', 'Data Telah diedit');
                    redirect(base_url('admin/kategori'), 'refresh');
                }
            } else {
                //edit kategori tanpa gambar
                $i              = $this->input;
                //slug kategori
                $slug_kategori  = url_title($this->input->post('nama_kategori'), 'dash', TRUE);

                $data = array(
                    'id_kategori'   => $id_kategori,
                    'slug_kategori' => $slug_kategori,
                    'nama_kategori' => $i->post('nama_kategori'),
                    'urutan'        => $i->post('urutan'),
                    // 'gambar'        => $upload_gambar['upload_data']['file_name']
                );
                $this->kategori_model->edit($data);
                $this->session->set_flashdata('sukses', 'Data Telah diedit');
                redirect(base_url('admin/kategori'), 'refresh');
            }
        }

        //end masuk database
        $data = array(
            'title'     =>  'Edit kategori: ' . $kategori->nama_kategori,
            'kategori'  =>  $kategori,
            'isi'       =>  'admin/kategori/edit'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    //hapus kategori
    public function delete($id_kategori)
    {
        //proses hapus gamabar
        $kategori = $this->kategori_model->detail($id_kategori);
        unlink('assets/upload/kategori/image/' . $kategori->gambar);
        unlink('assets/upload/kategori/image/thumbs/' . $kategori->gambar);
        //end proses hapus gambar

        $data = array('id_kategori' => $id_kategori);
        $this->kategori_model->delete($data);
        $this->session->set_flashdata('sukses', 'Data telah dihapus');
        redirect(base_url('admin/kategori'), 'refresh');
    }
}
