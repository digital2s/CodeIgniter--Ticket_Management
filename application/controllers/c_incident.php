<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Incident extends CI_Controller {
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
        $this->load->view('employee/form_ticket_v');
        $this->load->view('include/footer');
    }


  public function addIncident(){
                $this->form_validation->set_rules('text_incident','Incident','required');
        $this->form_validation->set_rules('texta_description','Description','required');


        $data= array(
            'title_incident'=>$this->input->post('text_incident'),
            'desc_incident'=>$this->input->post('texta_description'),
            'priority'=>$this->input->post('select_priority'),
            'statut'=>$this->input->post('select_status'),
            'date_incident'=>$this->input->post('date_incident'),
            'id_user' => $this->session->userdata('login_user'),
            'id_department' => $this->session->userdata('id_department')

        );

       if($this->form_validation->run() == False){
            $this->load->view('include/head');
         $this->load->view('include/header');
        $this->load->view('include/menu');
        $this->load->view('employee/form_ticket_v');
        $this->load->view('include/footer');
        }
        else
        {
           $this->m_incident->addIncident($data);
           redirect('c_incident/readIncidentsByDepartment/'.$data['id_department']);
       }
    }

      public function readIncidents(){

          $this->load->view('include/head');
        $this->load->view('include/header');
        $this->load->view('include/menu');

        $data['incidents']=$this->m_incident->readIncidentsWidthResponse();
        $this->load->view('admin/table_ticket_v', $data);
        $this->load->view('include/footer');

    }


      public function readDetailsById($id){

          $this->load->view('include/head');

        $data['incident']=$this->m_incident->readIncidentsWidthResponseById($id);
 
        $this->load->view('admin/table_details_v', $data);
        $this->load->view('include/footer');

    }


    public function readIncidentsByDepartment($id_department){

        $this->load->view('include/head');
        $this->load->view('include/header');
        $this->load->view('include/menu');
        $data['incidents']=$this->m_incident->readIncidentsByDepartment($id_department);
        $this->load->view('employee/table_ticket_v', $data);
        $this->load->view('include/footer');

    }


    public function readDescriptionById($id_incident){

        $this->load->view('include/head');
        $this->load->view('include/header');
        $this->load->view('include/menu');
        $data=$this->m_incident->readDescriptionById($id_incident);
        $this->load->view('technician/form_response_v', $data);
        $this->load->view('include/footer');

    }


    public function readDescription($id){

             $this->load->view('include/head');
        $description=$this->m_incident->readDescription($id);
        $this->load->view('employee/table_description_v', $description);
        $this->load->view('include/footer');

    }

      public function readIncidentById(){

        $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $this->load->view('admin/table_response_v');
         $this->load->view('include/footer');

    }


      public function updateIncident(){

    }


      public function deleteIncident($id=""){
        if ($id!="") {
           $this->m_response->deleteResponseByIncident($id);
           $this->m_incident->deleteIncidentById($id);
        }else{
          $this->m_response->deleteAllResponses();
           $this->m_incident->deleteAllIncidents();

        }
        
        redirect('c_incident/readIncidents');
    }
  }