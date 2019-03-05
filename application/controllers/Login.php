<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        if ($this->session->admin == TRUE) {
            redirect('Home');
         }
         else {
            $this->load->view('common/header');
           

            $data['titre'] = "Identification";
            $data['soustitre'] = "Pour accéder à ProdIgniter, merci de saisir vos identifiants.";
            $this->load->view('login_form',$data);
            $this->load->view('common/footer');
            
         }
    }
        
    public function check_admin()
    {
        $nbrep = User::where([
                        'nomUser'   =>$this->input->post('login'),
                        'password'  =>$this->input->post('pwd'),
                        'role'      =>'admin'
                    ])->count();
        
        if ($nbrep==1) {
            //enregistrement des données de session
            $sessiondata = array(
                   'nom'  => $this->input->post('login'),
                   'admin'=> TRUE
               );
            $this->session->set_userdata($sessiondata);
            redirect('Home');
        }
        else {
            $this->load->view('common/header');
            
            $data['titre'] = "Identification";
            $data['soustitre'] = "Vérifiez vos identifiants d'administration et recommencez !";
            $this->load->view('login_form',$data);
            
            $this->load->view('common/footer');
        }
    }
    
    public function disconnect()
    {
        $array_items = array('nom', 'admin');
        $this->session->unset_userdata($array_items);
        redirect('Login');
    }
}