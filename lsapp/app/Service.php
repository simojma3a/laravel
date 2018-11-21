<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //table name
    protected $table = 'service';
    //private key
    public $primaryKey = 'id';
    //timestamp
    public $timestamps = true;
}
