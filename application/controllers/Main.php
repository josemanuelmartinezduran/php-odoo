<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $x = $this->OdooModel->login();
        $content = "El usuario es $x";
        $data = array("title" => "Hola", "header" => "Mundo", "base" => base_url(), "content"=>$content);
        $this->load->view("mobile", $data);
    }
}