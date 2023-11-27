<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{
    //load Modal
    public function __construct()
    {
        parent::__construct();
        $this->load->model('banner_model');
        //proteksi halaman
        $this->simple_login->cek_login();
    }

    //data kategori
    public function index()

    {
        $banner = $this->banner_model->listing();

        $data = array(
            'title'     =>  'Data Banner',
            'banner'    =>  $banner,
            'isi'       =>  'admin/banner/list'
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    //tambah kategori
    public function tambah()
    {
        $banner = $this->banner_model->listing();
        // validasi input

        $valid = $this->form_validation;

        $valid->set_rules(
            'judul',
            'Judul',
            'required',
            array('required'   => '%s harus diisi')
        );
        $valid->set_rules(
            'keterangan',
            'Keterangan',
            'required',
            array('required'   => '%s harus diisi')
        );

        if ($valid->run()) {

            $config['upload_path']   = './assets/upload/banner/image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2400'; //dalam kb
            $config['max_width']     = '2024';
            $config['max_height']    = '2024';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                //end validasi
                $data = array(
                    'title'     =>  'Tambah Banner',
                    'banner'  =>  $banner,
                    'error'     =>  $this->upload->display_errors(),
                    'isi'       =>  'admin/banner/tambah'
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);
                //masuk database
            } else {
                $upload_gambar = array('upload_data' => $this->upload->data());

                //crearte thumbnail gambar
                $config['image_library']    = 'gd2';
                $config['source_image']     = './assets/upload/banner/image/' . $upload_gambar['upload_data']['file_name'];
                //lokasi folder thumbnail
                $config['new_image']        = './assets/upload/banner/image/thumbs/';
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']   = TRUE;
                $config['width']            = 250; //pixel
                $config['height']           = 250; //pixel
                $config['thumb_marker']     = '';

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
                //end thumbnail gambar

                $i = $this->input;

                $data = array(

                    'judul'                 => $i->post('judul'),
                    'keterangan'            => $i->post('keterangan'),
                    'gambar'                => $upload_gambar['upload_data']['file_name']
                );
                $this->banner_model->tambah($data);
                $this->session->set_flashdata('sukses', 'Data Telah ditambah');
                redirect(base_url('admin/banner'), 'refresh');
            }
        }
        //end masuk database
        $data = array(
            'title'     =>  'Tambah Banner',
            'banner'    =>  $banner,
            'isi'       =>  'admin/banner/tambah'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    //edit banner
    public function edit($id_banner)
    {
        $banner = $this->banner_model->detail($id_banner);
        // validasi input

        $valid = $this->form_validation;

        $valid->set_rules(
            'judul',
            'Judul',
            'required',
            array('required'   => '%s harus diisi')
        );

        $valid->set_rules(
            'keterangan',
            'Keterangan',
            'required',
            array('required'   => '%s harus diisi')
        );

        if ($valid->run()) {
            //check jika gambar diganti
            if (!empty($_FILES['gambar']['name'])) {

                $config['upload_path']   = './assets/upload/banner/image/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2400'; //dalam kb
                $config['max_width']     = '2024';
                $config['max_height']    = '2024';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    //end validasi
                    $data = array(
                        'title'     =>  'Edit Banner',
                        'banner'    =>  $banner,
                        'error'     =>  $this->upload->display_errors(),
                        'isi'       =>  'admin/banner/edit'
                    );
                    $this->load->view('admin/layout/wrapper', $data, FALSE);

                    //masuk database
                } else {
                    $upload_gambar = array('upload_data' => $this->upload->data());

                    //crearte thumbnail gambar
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './assets/upload/banner/image/' . $upload_gambar['upload_data']['file_name'];
                    //lokasi folder thumbnail
                    $config['new_image']        = './assets/upload/banner/image/thumbs/';
                    $config['create_thumb']     = TRUE;
                    $config['maintain_ratio']   = TRUE;
                    $config['width']            = 250; //pixel
                    $config['height']           = 250; //pixel
                    $config['thumb_marker']     = '';

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();
                    //end thumbnail gambar

                    $i              = $this->input;

                    $data = array(
                        'id_banner'     => $id_banner,
                        'judul'         => $i->post('judul'),
                        'keterangan'    => $i->post('keterangan'),
                        'gambar'        => $upload_gambar['upload_data']['file_name']
                    );
                    $this->banner_model->edit($data);
                    $this->session->set_flashdata('sukses', 'Data Telah diedit');
                    redirect(base_url('admin/banner'), 'refresh');
                }
            } else {
                //edit banner tanpa gambar
                $i              = $this->input;

                $data = array(
                    'id_banner'     => $id_banner,
                    'judul'         => $i->post('judul'),
                    'keterangan'        => $i->post('keterangan'),
                    // 'gambar'        => $upload_gambar['upload_data']['file_name']
                );

                $this->banner_model->edit($data);
                $this->session->set_flashdata('sukses', 'Data Telah diedit');
                redirect(base_url('admin/banner'), 'refresh');
            }
        }

        //end masuk database
        $data = array(
            'title'     =>  'Edit Banner',
            'banner'    =>  $banner,
            'isi'       =>  'admin/banner/edit'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    //hapus banner
    public function delete($id_banner)
    {
        //proses hapus gamabar
        $banner = $this->banner_model->detail($id_banner);
        unlink('assets/upload/banner/image/' . $banner->gambar);
        unlink('assets/upload/banner/image/thumbs/' . $banner->gambar);
        //end proses hapus gambar

        $data = array('id_banner' => $id_banner);
        $this->banner_model->delete($data);
        $this->session->set_flashdata('sukses', 'Data telah dihapus');
        redirect(base_url('admin/banner'), 'refresh');
    }
}
