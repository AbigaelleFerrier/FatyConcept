<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('Categorie');

        //var_dump(Categorie::all());
        var_dump(Produit::find('ALHIBZINAT')->categorie->libCateg);
        //var_dump(Categorie::find(1)->produits);
    }
        
   
}