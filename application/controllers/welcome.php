<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function index(){
        if(isset($_POST["usuario"])&&isset($_POST["contrasena"])){
        //if(!$usuario){
            $this->usuario = $this->input->post("usuario");//"recep@dentista.com";
            $this->contrasena = $this->input->post("contrasena");;//"abc123";
            $login = $this->login();
            if ($login === TRUE){
                $data["error"][0] = '';
                $usuario = $this->session->userdata("idempleado");
            } elseif ($login == 'error'){
                $data["error"][0] = "Usuario o Contraseña Incorrectos";
            } elseif ($login === FALSE){
                $data["error"][0] = "Debe introducir su usuario y contraseña correctamente para continuar";
            }
        }

        $usuario = $this->session->userdata("idusuario");

        if($usuario === FALSE){
            $data["titulo"][0]="Inicio de Sesión de Personal";
            $data["subtitulo"][0]="Si aún no cuenta con acceso puede ".anchor(base_url()."index.php/usuario/altaUsuario","darse de alta aquí").".";
            $data["contenido"][0]=$this->load->view('login',$data,true);
            $this->load->view('main',$data);
        }else{
            $data["titulo"][0]="Bienvenido";
            $data["subtitulo"][0]="bienvenido";
            $data["contenido"][0]="Panel de control";
            $this->load->view('main',$data);        
        }
    }
    
    public function connectWS(){
        if(!isset($this->xmlrpc->client->path)){
            $server_url = 'http://localhost/SIGuESCore/index.php/siguescore/';//
            $this->load->library('xmlrpc');
            $this->xmlrpc->server($server_url, 80);
        }
    }

     public function login(){
        if(isset($this->usuario) && isset($this->contrasena) && $this->usuario != '' && $this->contrasena != ''){
            $this->connectWS();
            $this->xmlrpc->method('getUsuarioByUserPass');
            //$this->xmlrpc->set_debug(TRUE);

            $this->xmlrpc->request($request = array($this->usuario,$this->contrasena));

            if ( ! $this->xmlrpc->send_request())
            {
                echo $this->xmlrpc->display_error();
            }
            else
            {
                $response = $this->xmlrpc->display_response();
            }
            if (is_array($response) && sizeof($response)>0){
                $user_data = array(
                    "idusuario"=>$response[0]["idusuario"],
                    "apellidoPaterno"=>$response[0]["apellidoPaterno"],
                    "apellidoMaterno"=>$response[0]["apellidoMaterno"],
                    "usuario"=>$response[0]["usuario"]
                );
                $this->session->set_userdata($user_data);
                return $user_data;
            } else {
                return "error";
            }
        } else {
            return false;
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->session->unset_userdata("idusuario");
        redirect('/index.php','location');
    }



    function getUsuarios() {

        $time_start = microtime(true);
//            $this->load->helper('url');
        $this->connectWS();
        $this->xmlrpc->method('getUsuarioByUserPass');
//            $this->xmlrpc->set_debug(TRUE);

        $this->xmlrpc->request($request = array());

        if ( ! $this->xmlrpc->send_request())
        {
            echo $this->xmlrpc->display_error();
        }
        else
        {
            echo '<pre>';
            $response = $this->xmlrpc->display_response();
            echo (is_array($response))? "si es": "no es";
            echo '</pre>';
        }

        $data["response"] = $response;
        $this->load->view("main",$data);

       // $this->xmlrpc->method('getUsuarioByUserPass');
       // $this->xmlrpc->request($request = array());
       // var_dump($this->xmlrpc->display_response()) ;
        $time_end = microtime(true);
        $execution_time = ($time_end - $time_start); //dividing with 60 will give the execution time in minutes other wise seconds
        echo '<b>Total Execution Time:</b> '.$execution_time.' Secs';
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */