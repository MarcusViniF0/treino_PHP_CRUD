<?php
class Usuarios_model extends CI_Model{
    public function salva($usaurio){
        $this->db->insert("usuarios",$usaurio);

    }
}