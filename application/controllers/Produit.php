<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produit extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
       
    }

    // public function save($refProd, $nomProd, $descProd, $PUHTProd, $qteStock, $categProd) {
    //     Produit::create(array( 'refProd'   => $refProd,
    //                         'nomProd'   => $nomProd,
    //                         'descProd'  => $descProd,
    //                         'PUHTProd'  => $PUHTProd,
    //                         'qteStock'  => $qteStock,
    //                         'categProd' => $categProd
    //                      ));
    // }
        
    public function mdf_stock() {
        Produit::where(['refProd'  => $this->input->post('refProd')])
              ->update(['qteStock' => $this->input->post('qteStock')]);
    }
}