<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Department extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text','string'));
        $this->load->library(array('session','form_validation','email')); 
        $this->load->model('m_department');
    }
    public function index()
    {
       
    }


  public function createDepartment(){
 $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $this->load->view('admin/form_department_v');
         $this->load->view('include/footer');
    }

    public function validFormCreateDepartment(){
                      $this->form_validation->set_rules('text_department','department','required');
       

        $data= array(
            'label_department'=>$this->input->post('text_department'),

        );

       if($this->form_validation->run() == False){
             $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $this->load->view('admin/form_department_v');
         $this->load->view('include/footer');
        }
        else
        {
           $this->m_department->createDepartment($data);
           redirect('C_Department/readDepartments');
       }
    }

      public function readDepartments(){
        $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');

               $data['departments']=$this->m_department->readDepartments();
        $this->load->view('admin/table_department_v', $data);
        
         $this->load->view('include/footer');

    }


     public function readDepartmentById($id){
        $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');

               $data=$this->m_department->readDepartmentById($id);
        $this->load->view('admin/form_department_v', $data);
        
         $this->load->view('include/footer');

    }


      public function updateDepartment($id){
         $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');

              $data=$this->m_department->readDepartmentById($id);
      
        $this->load->view('admin/form_department_v', $data);

                 $this->load->view('include/footer');

    }

public function validFormUpdateDepartment(){
                        $this->form_validation->set_rules('text_department','department','required');
       

        $data= array(
            'num_department' =>$this->input->post('hidden_department'),
            'label_department'=>$this->input->post('text_department')

        );

       if($this->form_validation->run() == False){
             $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $this->load->view('admin/form_department_v');
         $this->load->view('include/footer');
        }
        else
        {
           $this->m_department->updateDepartmentById($data);
           redirect('C_Department/readDepartments');
       }
}

      public function deleteDepartment(){
            $id = $this->input->post('checkbox_department');
            $this->m_department->deleteDepartmentById($id);
        redirect('c_department/readDepartments');
    }

  }