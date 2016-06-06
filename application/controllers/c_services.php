<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Services extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->output->set_header('Content-Type: text/html; charset=ISO-8859-1');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header('Content-Type: text/html; charset=ISO-8859-1');
    }
    
    public function index() {
        $datos['menu_active'] = "services";
	    log_message('error', base_url());
	    $this->load->view('layout/header', $datos);
        $this->load->view('v_services');
        $this->load->view('layout/footer');
    }
}