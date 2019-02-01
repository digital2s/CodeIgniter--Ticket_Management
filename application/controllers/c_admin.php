<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Admin extends CI_Controller {
    function __construct()
    {
        parent::__construct();
      /*  $this->load->database();
        $this->load->helper(array('form','url','text','string'));
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('product_m');*/
    }
    public function index()
    {
       /* if($this->session->userdata('droit')!=1){
            redirect('user_c');
        }*/

        $this->load->view('include/head');
       // $this->load->view('client/v_client_nav');
        $this->load->view('employee/v_client_index');

       /* $data['product']=$this->product_m->readProducts();
        $this->load->view('client/v_client_product',$data);*/

        $this->load->view('v_foot');
    }

