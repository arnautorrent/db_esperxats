<?php
class Estadistiques extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('estadistiques_model');
        $this->load->helper('url_helper');
    }

    public function comparacio($any = NULL)
    {
        $any_actual = date("Y");
        if (isset($any)){
            $any_comp = $any;
        }
        else{
            $any_comp = $any_actual - 1;
        }

        $data['any_actual'] = $any_actual;
        $data['any_comp'] = $any_comp;

        $data['resum_temp_act'] = $this->estadistiques_model->get_temporada($any_actual);
        $data['resum_temp_comp'] = $this->estadistiques_model->get_temporada($any_comp);
        $data['temporada_actual'] = $this->genera_plantilla();
        $data['temporada_comparada'] = $this->genera_plantilla();
        $data['temporada_actual'] = $this->omplir_plantilla($data['resum_temp_act'],$data['temporada_actual']);
        $data['temporada_comparada'] = $this->omplir_plantilla($data['resum_temp_comp'],$data['temporada_comparada']);

        $this->load->view('templates/header', $data);
        $this->load->view('estadistiques/comp_temp', $data);
        $this->load->view('templates/footer');
    }

    public function genera_plantilla()
    {
        $castells = array('3d7','4d7','pd5','2d6','3d6ps','5d6','7d6','4d6a','3d6a','3d6','4d6');
        $resultats = array('d','c','i','id');

        $plantilla = array();
        foreach ($castells as $fila){
            $plantilla[$fila] = array();
            foreach ($resultats as $columna){
                $plantilla[$fila][$columna] = 0;
            }
        }

        return $plantilla;
    }

    public function omplir_plantilla($resum, $temporada)
    {
        foreach ($resum as $registre) {
            if (isset($temporada[$registre->castell])){
                $temporada[$registre->castell][$registre->resultat] = (int) $registre->{'count(*)'};
            }
        }
        return $temporada;
    }

    public function castells_consultats()
    {
        $castells = array('3d7','4d7','pd5','2d6','3d6ps','5d6','7d6','4d6a','3d6a','3d6','4d6');
        return $castells;
    }
}