<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_main extends CI_Controller {
    
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
        $data['menu_active'] = "home";
        log_message('error', base_url());
        $this->load->view('layout/header', $data);
        $this->load->view('v_home');
        $this->load->view('layout/footer');
    }
    
    function redirectToDetalleCard(){
        $data = null;
        try{
            $card = $this->input->post('card');
            $data['url'] = base_url().'c_cards?card='.(($card));
        } catch(Exception $e){
            log_message('error', $e->getMessage());
        }
        echo json_encode(array_map('utf8_encode', $data));
    }
}
