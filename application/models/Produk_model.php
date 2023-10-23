<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    //load Modal
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //listing all data produk
    public function listing()
    {
        $this->db->select(
                            'produk.*,
                            users.nama,
                            kategori.nama_kategori,
                            kategori.slug_kategori,
                            count(gambar.id_gambar) AS total_gambar'
        );
        $this->db->from('produk');
        //join
        $this->db->join('users', 'users.id_user = produk.id_user', 'left');
        $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
        $this->db->join('gambar', 'gambar.id_produk = produk.id_produk', 'left');
        //end join
        $this->db->group_by('produk.id_produk');
        $this->db->order_by('id_produk', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

     //listing all data produk home
     public function home()
     {
         $this->db->select(
                             'produk.*,
                             users.nama,
                             kategori.nama_kategori,
                             kategori.slug_kategori,
                             count(gambar.id_gambar) AS total_gambar'
         );
         $this->db->from('produk');
         //join
         $this->db->join('users', 'users.id_user = produk.id_user', 'left');
         $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
         $this->db->join('gambar', 'gambar.id_produk = produk.id_produk', 'left');
         //end join
         $this->db->where('produk.status_produk', 'Publish');
         $this->db->group_by('produk.id_produk');
         $this->db->order_by('id_produk', 'desc');
         $this->db->limit(12); 
         $query = $this->db->get();
         return $query->result();
     }
 
    //edit
    public function detail($id_produk)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_produk', $id_produk);
        $this->db->order_by('id_produk', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

     //edit
     public function detail_gambar($id_gambar)
     {
         $this->db->select('*');
         $this->db->from('gambar');
         $this->db->where('id_gambar', $id_gambar);
         $this->db->order_by('id_gambar', 'desc');
         $query = $this->db->get();
         return $query->row();
     }

    //gambar
    public function gambar($id_produk)
    {
        $this->db->select('*');
        $this->db->from('gambar');
        $this->db->where('id_produk', $id_produk);
        $this->db->order_by('id_gambar', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    //tambah
    public function tambah($data)
    {
        $this->db->insert('produk', $data);
    }

    //tambah gambar
    public function tambah_gambar($data)
    {
        $this->db->insert('gambar', $data);
    }

    //edit
    public function edit($data)
    {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->update('produk', $data);
    }
    //delete
    public function delete($data)
    {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->delete('produk', $data);
    }
     //delete gambar
     public function delete_gambar($data)
     {
         $this->db->where('id_gambar', $data['id_gambar']);
         $this->db->delete('gambar', $data);
     }
}
