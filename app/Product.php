<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //Mass Assignment....
  //Define the fillable attributes
  //the product_id and fk_category_id are auto_incremented
  protected $fillable = array('product_name');



  //Define Relationships

  //many products have one category

  public function categories(){
    return $this->belongsTo('Category');
  }

  //Each product has many sales
  public function sales(){
    return $this->hasMany('Sale');
  }

}
