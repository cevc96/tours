<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->output->set_header('Content-Type: text/html; charset=ISO-8859-1');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
        $this->load->library('session');
        $this->output->set_header('Content-Type: text/html; charset=ISO-8859-1');
        if($this->session->userdata('id_usuario') != null) {
            redirect('c_main','refresh');
        }
    }
    
	public function index()
	{
	    $data['menu_active'] = "home";
	    $this->load->view('layout/header', $data);
	    $this->load->view('v_login',$data);
	    $this->load->view('layout/footer');
	}
	
	function logear(){
	    $data['error'] = 1;
	    $data['msj'] = null;
	    $usuario = 'admin';
	    $contrasena = '123';
	    $idUsuario = '1';
	    try{
	        $username = trim($this->input->post('username'));
	        $password = trim($this->input->post('password'));
	        if(($username) == null) {
	            throw new Exception('Ingrese su usuario');
	        }
	        if($password == null) {
	            throw new Exception('Ingrese su contrase�a');
	        }
	        if($username != $usuario || $password != $contrasena){
	            throw new Exception('El usuario y/o contrase�a no son correctos');
	        }
	        $data['error'] = 0;
	        $data['url'] = base_url().'c_main';
	        $this->session->set_userdata(array('id_usuario' => $idUsuario));
	    } catch(Exception $e) {
	          $data['msj'] = $e->getMessage();
	    }
	    echo json_encode(array_map('utf8_encode', $data));
	}
}
