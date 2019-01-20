<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Categorie extends Eloquent
{
    protected $primaryKey = 'idCateg';
    public $timestamps = false;

    public function produits() {
    	return $this->hasMany('Produit', 'categProd');
    }
}