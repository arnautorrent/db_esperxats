<?php

class Estadistiques_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_temporada_final_any($any = NULL)
    {
        $query = $this->db->query("CALL proc_consultaResultatCastell('".$any."-01-01','".$any."-12-31')");
        $resum = $query->result();
        $this->db->free_db_resource();
        return $resum;
    }

    public function get_temporada_data_actual($any = NULL)
    {
        $data = getdate();
        $data_final = date('-m-d',$data[0]);
        $query = $this->db->query("CALL proc_consultaResultatCastell('".$any."-01-01','".$any."".$data_final."')");
        $resum = $query->result();
        $this->db->free_db_resource();
        return $resum;
    }
}