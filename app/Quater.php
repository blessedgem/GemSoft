<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quater extends Model
{
  //Mass Assignment
  //Define the fillable attributes
  protected $fillable = array('quater_name');

  //Define Relationships
  //each quarter has many sales
  public function sales(){
    return $this->hasMany('Sale');
  }



  //each quater has many products
  public function products(){
    return $this->hasMany('Product');
  }

}
