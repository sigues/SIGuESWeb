<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function index(){
        $usuario = $this->session->userdata("idempleado");
        if(isset($_POST["entrar"])){
        //if(!$usuario){
            $this->usuario = $_POST["usuario"];//"recep@dentista.com";
            $this->contrasena = $_POST["contrasena"];//"abc123";
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
        if($usuario === FALSE){
            $data["titulo"][0]="Inicio de Sesión de Personal";
            $data["subtitulo"][0]="Si aún no cuenta con acceso favor de pedirlo en la clínica.";
            $data["contenido"][0]=$this->load->view('login','',true);
            $data['seccion']='personal';
            $this->load->view('main',$data);
        }else{
            $this->controlPanel();
        }
    }

     public function login(){
        if(isset($this->usuario) && isset($this->contrasena) && $this->usuario != '' && $this->contrasena != ''){


            $query = $this->db->get_where('empleado',array('correo'=>$this->usuario,'contrasena'=>md5($this->contrasena)),1);
            if(sizeof($query->result())>0){
                foreach ($query->result() as $row){
                    $userdata = array("idempleado"   => $row->idempleado,
                                      "correo"      => $row->correo,
                                      "puesto"      => $row->puesto);
                    $this->session->set_userdata($userdata);
                    $this->puesto = $row->puesto;
                    return TRUE;
                }
            } else {
                return 'error';
            }



        } else {
            return FALSE;
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->session->unset_userdata("idempleado");
        redirect('/personal','location');
    }



        function getUsuarios() {

            $time_start = microtime(true);
            $this->load->helper('url');
            $server_url = 'http://localhost/SIGuESCore/index.php/siguescore/';//

            $this->load->library('xmlrpc');

            $this->xmlrpc->server($server_url, 80);
            $this->xmlrpc->method('getUsuarioByUserPass');
//            $this->xmlrpc->set_debug(TRUE);
           // $request = array('bolas','peludas','cagontoo');
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