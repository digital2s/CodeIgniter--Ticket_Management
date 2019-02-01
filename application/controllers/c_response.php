<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Response extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text','string'));
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('m_response');
           $this->load->model('m_incident');
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


  public function createResponse(){
                $this->form_validation->set_rules('texta_answer','Response','required');

                  

        $data= array(
            'id_incident'=>$this->input->post('hidden_incident'),
            'text_response'=>$this->input->post('texta_answer'),
        );

       if($this->form_validation->run() == False){
            $this->load->view('include/head');
        $this->load->view('include/header');
        $this->load->view('include/menu');
        $data=$this->m_incident->readDescriptionById($id_incident);
        $this->load->view('technician/form_response_v', $data);
        $this->load->view('include/footer');
        }
        else
        {
           $this->m_response->createResponse($data);
           redirect('c_technician/');
       }
    }

      public function readResponseByIncident($id){
           $this->load->view('include/head');
        $this->load->view('include/header');
        $this->load->view('include/menu');
        $data['response']=$this->m_response->readResponseByIncident($id);
        $data['incident']=$this->m_incident->readDescriptionById($id);
        
        $this->load->view('technician/table_response_v', $data);
        $this->load->view('include/footer');
    }


      public function updateDepartment(){

    }


      public function deleteDepartment(){

    }

  }