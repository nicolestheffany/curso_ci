<?php
class post_model extends CI_Model{
public $id;
public $msg;
public $datahora;

public function __construct(){
    parent::__construct();
}

public function inserir(){
    $dados = array("msg" => $this->msg);
    return $this->db->insert('post', $dados);
}
public function recuperar(){
    $this->db->order_by('datahora', 'asc');
    $query = $this->db->get('post');
    return $query->result();
}
public function deletar(){
    $this->db->where('id', $this->id)->delete('post');  
}
public function editar(){
    $this->db->where('id', $this->id)->edit('post');  
}
}