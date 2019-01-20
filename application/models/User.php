<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $primaryKey = 'idUser';
    public $timestamps = false;
}