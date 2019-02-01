<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Technician extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text','string'));
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('m_incident');
              $this->load->model('m_response');
    }
    public function index()
    {
       $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
                $data['incidents']=$this->m_incident->readIncidents();
        $this->load->view('technician/table_ticket_v', $data);
         $this->load->view('include/footer');
    }



  public function check_access($id){
    $read = 1;  //    0 == unread
    $this->m_incident->updateReadIncident($id, $read);  
           
    if ($this->m_response->readResponseByIncident($id)==true) {
      
     redirect('c_response/readResponseByIncident/'.$id);
    }else{
      
redirect('c_incident/readDescriptionById/'.$id);
    }

    }

    public function readTicketById(){
       $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $this->load->view('technician/form_response_v');
         $this->load->view('include/footer');
    }


      public function updateDepartment(){

    }


      public function deleteDepartment(){

    }
  }