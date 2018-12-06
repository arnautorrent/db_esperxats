<?php
class Estadistiques_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_temporada($any = '2018')
    {
        $query = $this->db->query("CALL proc_consultaResultatCastell('".$any."-01-01','".$any."-12-31')");
        $resum = $query->result();
        $this->db->free_db_resource();
        return $resum;
    }
}