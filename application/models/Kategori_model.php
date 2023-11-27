<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    //load Modal
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //listing all data User
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $query = $this->db->get();
        return $query->result();
    }

    //edit
    public function detail($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id_kategori);
        $this->db->order_by('id_kategori', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    //edit slug kategori
    public function read($slug_kategori)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('slug_kategori', $slug_kategori);
        $this->db->order_by('id_kategori', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    //login user
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where(array(
            'username'   => $username,
            'password'  => MD5($password)
        ));
        $this->db->order_by('id_kategori', 'desc');
        $query = $this->db->get();
        return $query->row();
    }


    //tambah
    public function tambah($data)
    {
        $this->db->insert('kategori', $data);
    }

    //edit
    public function edit($data)
    {
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->update('kategori', $data);
    }
    //delete
    public function delete($data)
    {
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->delete('kategori', $data);
    }
    
}
