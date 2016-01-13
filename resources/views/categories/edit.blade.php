<!--resources/views/categories/create.blade.php -->
<!--Reference the layout -->

@extends('layouts.nankandlayout')
@section('content')

<h1>Edit a Category</h1>

<!-- if there are creation errors, they will show here -->
{!! HTML::ul($errors->all()) !!}

{!! Form::open(array('url' => 'categories')) !!}

    <div class="form-group">
        {!! Form::label('category_name', 'Name') !!}
        {!! Form::text('category_name', Input::old('name'), array('class' => 'form-control')) !!}
    </div>



    {!! Form::submit('Edit the Category!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

@endsection
