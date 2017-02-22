<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AltaPersonal extends CI_Controller {

    public function index()
    {
        $x = $this->OdooModel->login();
        $content = form_open("AltaPersonal/save");
        $content .= form_input("Nombre");
        $content .= form_input("Nip");
        $content .= form_submit("Guardar", "submit");
        $content .= form_close();
        $data = array("title" => "Hola", "header" => "Mundo", "base" => base_url(), "content"=>$content);
        $this->load->view("mobile", $data);
    }
    
    public function save(){
        $x = $this->OdooModel->login();
        
        //$this->OdooModel->create(, "hr.employee");
    }
}