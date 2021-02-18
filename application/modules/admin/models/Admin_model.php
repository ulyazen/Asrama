<?php

class Admin_model extends CI_Model
{

    public function readArtikel($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('tbl_artikel');
            return $query->result_array();
        }
        $query = $this->db->get_where('tbl_artikel', array('slug' => $slug));
        return $query->row_array();
    }
    public function createArtikel($data)
    {
        $this->db->insert('tbl_artikel', $data);
    }
    public function updateArtikel($id, $data)
    {
        $this->db->where('id_artikel', $id);
        $this->db->update('tbl_artikel', $data);
    }
    public function deleteArtikel($id)
    {
        $this->db->where('id_artikel', $id);
        $this->db->delete('tbl_artikel');
    }
    public function readPesan()
    {
        return $this->db->query("SELECT * FROM tbl_pesan")->result_array();
    }
    public function createPesan($data)
    {
        $this->db->insert('tbl_pesan', $data);
    }
    public function deletePesan($id)
    {
        $this->db->where('id_pesan', $id);
        $this->db->delete('tbl_pesan');
    }
    public function readGaleri()
    {
        return $this->db->query("SELECT * FROM tbl_galeri")->result_array();
    }
    public function updateGaleri($id, $data)
    {
        $this->db->where('id_galeri', $id);
        $this->db->update('tbl_galeri', $data);
    }
    public function readSite()
    {
        return $this->db->query("SELECT * FROM tbl_site")->result_array();
    }
    public function updateSite($id, $data)
    {
        $this->db->where('id_site', $id);
        $this->db->update('tbl_site', $data);
    }
    public function readUser()
    {
        return $this->db->query("SELECT * FROM tbl_user")->result_array();
    }
    public function updateUser($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('tbl_user', $data);
    }
    public function deleteUser($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tbl_user');
    }
}
