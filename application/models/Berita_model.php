<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //listing
    public function listing()
    {
        $query = $this->db->get('berita');
        return $query->row();
    }

    //edit
    public function edit($data)
    {
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->update('berita', $data);
    }
}