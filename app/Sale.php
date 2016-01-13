<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  //Mass Assignment
  //Define fillable attributes
  //the sales_id,fk_product_id,fk_quater_id are auto_incremented
  protected $fillable = array('sales_value');


  //Define Relationships
  //Each sale has one category
  public function sales(){
    return $this->hasOne('Category');

  }

  //Each sale has one quarter
  public function quaters(){
    return $this->hasOne('Quater');

  }


  //each sale has one product
  public function products(){
    return $this->hasOne('Product');

  }
}
