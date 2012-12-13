<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

    function index(){
        
    }

    public function connectWS(){
        if(!isset($this->xmlrpc->client->path)){
            $server_url = 'http://localhost/SIGuESCore/index.php/siguescore/';//
            $this->load->library('xmlrpc');
            $this->xmlrpc->server($server_url, 80);
        }
    }

    public function altaUsuario(){
        if(isset($_POST)){
            $this->guardarUsuario();
        }
        $data["titulo"][0]="Alta de usuarios";
        $data["subtitulo"][0]="Llene todos los datos para registrarse.";
        $data["contenido"][0]=$this->load->view('usuario/altaUsuario',$data,true);
        $data['seccion']='personal';
        $this->load->view('main',$data);

    }

    public function guardarUsuario(){

    }

}

?>