<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Produit extends Eloquent
{
    protected $primaryKey = 'refProd';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function categorie() {
    	return $this->belongsTo('Categorie', 'categProd', 'idCateg');
    }
}

