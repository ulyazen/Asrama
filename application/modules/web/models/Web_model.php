<?php

class Web_model extends CI_Model
{
    public function readGaleri()
    {
        return $this->db->query("SELECT * FROM tbl_galeri")->result_array();
    }
    public function readSite($id)
    {
        return $this->db->query("SELECT * FROM tbl_site WHERE id_site = $id")->result_array();
    }

    public function readArtikel($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('tbl_artikel');
            return $query->result_array();
        }
        $query = $this->db->get_where('tbl_artikel', array('slug' => $slug));
        return $query->row_array();
    }
    public function readArtikelAll($limit, $start)
    {
        $query = $this->db->get('tbl_artikel', $limit, $start);
        return $query->result_array();
    }
    public function readArtikelLimit2()
    {
        return $this->db->query("SELECT * FROM tbl_artikel ORDER BY `tbl_artikel`.`tgl_post` DESC LIMIT 2")->result_array();
    }
    public function readArtikelLimit4()
    {
        return $this->db->query("SELECT * FROM tbl_artikel ORDER BY `tbl_artikel`.`tgl_post` DESC LIMIT 4")->result_array();
    }
}
