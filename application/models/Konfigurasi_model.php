<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //listing
    public function listing()
    {
        $query = $this->db->get('konfigurasi');
        return $query->row();
    }

    //edit
    public function edit($data)
    {
        $this->db->where('id_konfigurasi', $data['id_konfigurasi']);
        $this->db->update('konfigurasi', $data);
    }

    // nav kategori produk
    public function nav_produk()
    {
        $this->db->select(
            'produk.*,
            kategori.nama_kategori,
            kategori.slug_kategori'
        );
        $this->db->from('produk');
        //join
        $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
        $this->db->join('gambar', 'gambar.id_produk = produk.id_produk', 'left');

        $this->db->group_by('produk.id_kategori');
        $this->db->order_by('kategori.urutan', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    //kategori produk
    public function kategori_produk()
    {
        $this->db->select(
            'produk.*,
        kategori.nama_kategori,
        kategori.slug_kategori,
        count(gambar.id_gambar) AS total_gambar'
        );
        $this->db->from('produk');
        //join
        $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
        $this->db->join('gambar', 'gambar.id_produk = produk.id_produk', 'left');
        //end join
        $this->db->group_by('produk.id_produk');
        $this->db->order_by('id_produk', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

}
