<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::_construct();
        $this->load->library("nuSoap_lib");
    }

       function index() {
//echo "hola";die();
           
           $this->load->library("prueba");
           echo $this->prueba->prueba();
           $this->load->library("NuSOAP/lib/nusoap");
           echo "-".$this->nusoap->getGlobalDebugLevel();
           /*$this->nusoap_client = new nusoap_client("http://localhost/SIGuESCore/app_dev.php/soap");

           if($this->nusoap_client->fault)
           {
                $text = 'Error: '.$this->nusoap_client->fault;
           }
           else
           {
               if ($this->nusoap_client->getError())
               {
                    $text = 'Error: '.$this->nusoap_client->getError();
               }
               else
               {
                    $row = $this->nusoap_client->call(
                             'response',
                              array("parametro"=>true)
                           );
               }
           }*/
       }
        
	public function index_xml()
	{
                $this->load->helper('url');
		$server_url = 'http://localhost/SIGuESCore/index.php/siguescore/';//
                
		$this->load->library('xmlrpc');

		$this->xmlrpc->server($server_url, 80);
		$this->xmlrpc->method('Greetings');

		$request = array('bolas','peludas','cagontoo');
		$this->xmlrpc->request($request);

		if ( ! $this->xmlrpc->send_request())
		{
			echo $this->xmlrpc->display_error();
		}
		else
		{
			echo '<pre>';
			print_r($this->xmlrpc->display_response());
			echo '</pre>';
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */