<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  //Mass Assignment....
//define the attributes that are fillable
protected $fillable =array('category_name');

protected $table = "categories";

//Define Relationships
//Each category has many products

public function products(){
  //match the name of the eloquent model
  //corresponding to the item
  return $this->hasMany('Product');
}

//Each category has many sybase_get_last_message
public function sales(){
  return $this->hasMany('Sale');
}

//To get all the categories
//$catgory = Category::all();
}
