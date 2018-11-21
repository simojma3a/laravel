<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //table name
    protected $table = 'categorie';
    //private key
    public $primaryKey = 'id';
    //timestamp
    public $timestamps = true;
}
