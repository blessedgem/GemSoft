<?php
namespace App\Http\Controllers;
use  App\Category;
use App\Http\Controllers\Controller;
use Validator;
use Input;
use Redirect;
class CategoryController extends Controller{

  public function index()
  {
    //get all the categories
    $categories = Category::orderBy("category_id","ASC")->paginate(20);

    //load the view and pass the categories
    return view('categories.index')
      ->with('categories',$categories);
  }

  public function create()
   {
       //load the create from form
       //(app/views/categories/create.blade.php)
       return view('categories.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {
       //Validate
       $rules=array(
         'name'=>'required'
       );
       $validator=Validator::make(Input::all(),$rules);

       //process the login
       if ($validator->fails()){
         return Redirect::to('categories/create')
            ->withErrors($validator)
            ->withInput(Input::expect('password'));
       }
       else{
         //store
         $category = new Category;
         $category->name = Input::get('name');
         $category->save();

         //redirect
         Session::flash('message','Successfully created categories' );
         return Redirect::to('nerds');
       }
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
       //
   }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      //specify the views.edit.blade.php
        return view('categories.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }





}
