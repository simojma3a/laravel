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

    public function categorie(){
        $this->belongsTo(Categorie::class);
    }

   public function scopeCategorieType($query, $categorie)
    {
        return $query->where('categorie_id', $categorie);
    }
    public function user(){
        $this->belongsTo(User::class);
    }

}
