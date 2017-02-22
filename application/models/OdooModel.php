<?php

class OdooModel extends CI_Model {
    function login(){
        $username = "admin";
        $password = "admin";
        $database = "Veritas";
        $host = "http://127.0.0.1:8019/xmlrpc/";
        $this->load->library("odoo/OpenERP");
        $x = $this->openerp->login($username, $password, $database, $host);
        return $x;
    }
        
    function read_id($id, $model){
        $data = $this->openerp->searchread(array(array('id','=', $id)),  $model);
        foreach ($data as $p) {
            return $p;
        }
        return -1;
    }
    
    function read_name($name, $model){
        $data = $this->openerp->searchread(array(array('name','=', $name)),  $model);
        foreach ($data as $p) {
            return $p;
        }
        return -1;
    }
    
    function read_domain($variable, $condition, $compare, $model){
        $data = $this->openerp->searchread(array(array($variable, $condition, $compare)),  $model);
        return $data;
    }
    
    function read($model){
        $data = $this->openerp->searchread(array(),  $model);
        return $data;
    }
    
    function create($vals, $model){
        return $this->openerp->create($vals, $model);
    }
    
    function write($id, $vals, $model){
        return $this->openerp->write(array($id), $vals, $model);
    }
}
?>