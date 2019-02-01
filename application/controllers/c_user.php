<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_User extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text','string', 'email'));
        $this->load->library(array('session','form_validation','email'));
        $this->load->model('m_user');
        $this->load->model('m_department');

    }
    public function index()
    {
         $this->load->view('include/head');
             $data['error'] = "";
        $this->load->view('login', $data);
       
    }

    public function check_access(){
        if( $this->session->userdata('id_type')==1){ // Admin
            redirect('c_incident/readIncidents');
        }
        elseif( $this->session->userdata('id_type')==2){ // Employee
            redirect('c_incident');
        }elseif ($this->session->userdata('id_type')==3) { // Technician
            redirect('c_technician');
        }
    }

    // Create Technician By Admin
    public function createUser(){
        $this->form_validation->set_rules('text_fname','First Name','required');
        $this->form_validation->set_rules('text_lname','Last Name','required');
        $this->form_validation->set_rules('email', 'E-Mail', 'required');
        $this->form_validation->set_rules('text_login', 'Login', 'required');
        $this->form_validation->set_rules('text_pass', 'Password', 'required');
        
        $this->form_validation->set_error_delimiters('<span class="error">','</span>');


        $data= array(
            'fname_user'=>$this->input->post('text_fname'),
            'lname_user'=>$this->input->post('text_lname'),
            'email_user'=>$this->input->post('email'),
            'login_user'=>$this->input->post('text_login'),
            'pw_user'=>$this->input->post('text_pass'),
             'id_department'=> 10 , // informatique id
            'id_type'=> 3,  //Technician
        );

       if($this->form_validation->run() == False){
             $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $this->load->view('table_users_v');
         $this->load->view('include/footer');
        }
        else
        {
           $this->m_user->createUser($data);
           redirect('c_user');
       }
    }



      public function readUsersByType($id_type){
        $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $data['users'] = $this->m_user->readUsersByType($id_type);
        $data['id_type'] = $id_type;
        $this->load->view('admin/table_users_v', $data);
         $this->load->view('include/footer');
    }


    public function updateAccount(){
        $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $this->load->view('form_user_v');
         $this->load->view('include/footer');
    }

    public function validFormUpdateAccount(){
 

        $this->form_validation->set_rules('text_fname','First Name','required');
        $this->form_validation->set_rules('text_lname','Last Name','required');
        //$this->form_validation->set_rules('email', 'E-Mail', 'required');
    //    $this->form_validation->set_rules('text_login', 'Login', 'required');
        $this->form_validation->set_rules('text_pass', 'Password', 'required');
        
        $this->form_validation->set_error_delimiters('<span class="error">','</span>');


        $data= array(
            'fname_user'=>$this->input->post('text_fname'),
            'lname_user'=>$this->input->post('text_lname'),
            'email_user'=>$this->input->post('email'),
          //  'login_user'=>$this->input->post('text_login'),
             'login_user'=>$this->session->userdata('login_user'),
            'pw_user'=>$this->input->post('text_pass'),
            'id_type'=>  $this->session->userdata('id_type')
        );

       if($this->form_validation->run() == False){
             $this->load->view('include/head');
           $this->load->view('include/header');
             $this->load->view('include/menu');
        $this->load->view('form_user_v');
         $this->load->view('include/footer');
        }
        else
        {
           $this->m_user->updateAccount($data);
           redirect('c_user');
       }
   }


    public function deleteAccount(){
        $id = $this->input->post('checkbox_user');
       $this->m_user->deleteAccount($id);
       redirect('c_user');
    }


    public function signup(){
        $this->load->view('include/head');
        $data['departments'] = $this->m_department->readDepartmentsDropdown();
        $this->load->view('signup', $data);
    }

         public function validFormSignup(){
 

        $this->form_validation->set_rules('text_fname','First Name','required');
        $this->form_validation->set_rules('text_lname','Last Name','required');
        //$this->form_validation->set_rules('email', 'E-Mail', 'required');
        $this->form_validation->set_rules('text_login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        $this->form_validation->set_error_delimiters('<span class="error">','</span>');


        $data= array(
              'login_user'=>$this->input->post('text_login'),      
            'fname_user'=>$this->input->post('text_fname'),
            'lname_user'=>$this->input->post('text_lname'),
            'email_user'=>$this->input->post('email'),
            'pw_user'=>$this->input->post('password'),
             'id_department'=>$this->input->post('select_department'),
            'id_type'=> 2,  // Employee
        );

       if($this->form_validation->run() == False){
             $this->load->view('include/head');
            $data['departments'] = $this->m_department->readDepartmentsDropdown();
            $this->load->view('signup', $data);
        }
        else
        {
           $this->m_user->createUser($data);
           redirect('c_user/signin');
       }
   }

    public function signin(){
        $this->form_validation->set_rules('text_login','Login','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');

          $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

        $data= array(
            'login'=>$this->input->post('text_login'),
            'pass'=>$this->input->post('password')
        );

        if($this->form_validation->run() == False){   
             $this->load->view('include/head');
        $data['error'] = "";
        $this->load->view('login', $data);
        }else{
            $data_session=array();
            if( ($data_session=$this->m_user->verif_connexion($data) ) != False){
                $this->session->set_userdata($data_session);
                redirect('c_user/check_access');
            }else{
               $data['error']="Login or Password Error !";
                $this->load->view('include/head');
                $this->load->view('login', $data);
               }
        }      
    }


    public function reset_pw(){
          $this->form_validation->set_rules('email','Email','required');


        $this->form_validation->set_error_delimiters('<span class="error">','</span>');

         $data= array(
              'email_user'=>$this->input->post('email')  
   );
             if($this->form_validation->run() == False){
                  $this->load->view('include/head');
                   $data['error'] = "";
        $this->load->view('reset_pw', $data);
    }else
    if (!valid_email($data['email_user'])) {
         $this->load->view('include/head');
         $data['error'] = "email is not valid";
        $this->load->view('reset_pw', $data);
    }else{

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('someone@example.com');
        $this->email->cc('another@another-example.com');
        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();
    

    }

    
       
    }
    
       public function signout()
    {
        $this->session->sess_destroy();
        redirect('c_user');
    }
    
}