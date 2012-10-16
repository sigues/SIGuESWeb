<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
                $this->load->helper('url');
		$server_url = 'http://localhost/SIGuESCore/index.php/siguescore/';//
                
		$this->load->library('xmlrpc');

		$this->xmlrpc->server($server_url, 80);
		$this->xmlrpc->method('Greetings');

		$request = array('bolas',usuario_core,contrasena_core);
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