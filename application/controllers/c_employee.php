<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Employee extends CI_Controller {
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
       $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $this->load->view('employee/form_ticket_v');
         $this->load->view('include/footer');
    }


public function readTickets(){
  $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $this->load->view('employee/table_ticket_v');
         $this->load->view('include/footer');
}

  public function signup(){

    }}