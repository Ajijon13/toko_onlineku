<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasbor_model extends CI_Model
{
    //load Modal
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //total produk

    public function total_produk()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('produk');
        $query = $this->db->get();
        return $query->row();
    }

    public function total_gambar()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('gambar');
        $query = $this->db->get();
        return $query->row();
    }
    
    public function total_kategori()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('kategori');
        $query = $this->db->get();
        return $query->row();
    }

    public function total_user()
    {
        $this->db->select('COUNT(*) AS total');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->row();
    }
}
