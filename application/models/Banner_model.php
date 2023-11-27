<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner_model extends CI_Model
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
        $this->db->from('banner');
        $query = $this->db->get();
        return $query->result();
    }

    //edit
    public function detail($id_banner)
    {
        $this->db->select('*');
        $this->db->from('banner');
        $this->db->where('id_banner', $id_banner);
        $this->db->order_by('id_banner', 'desc');
        $query = $this->db->get();
        return $query->row();
    }


    //login user
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('banner');
        $this->db->where(array(
            'username'   => $username,
            'password'  => MD5($password)
        ));
        $this->db->order_by('id_banner', 'desc');
        $query = $this->db->get();
        return $query->row();
    }


    //tambah
    public function tambah($data)
    {
        $this->db->insert('banner', $data);
    }

    //edit
    public function edit($data)
    {
        $this->db->where('id_banner', $data['id_banner']);
        $this->db->update('banner', $data);
    }
    //delete
    public function delete($data)
    {
        $this->db->where('id_banner', $data['id_banner']);
        $this->db->delete('banner', $data);
    }
    
}
