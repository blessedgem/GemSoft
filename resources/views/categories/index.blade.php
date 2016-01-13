<!-- -->
@extends('layouts.nankandlayout')
@section('content')
 <h1>All The Categories</h1>

 <!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>

        </tr>
    </thead>
    <tbody>
    @foreach($categories as $key => $value)
        <tr>
            <td>{{ $value->category_id }}</td>
            <td>{{ $value->category_name }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('categories/' . $value->category_id) }}">Show this Category</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('categories/' . $value->category_id . '/edit') }}">Edit this Category</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{!! $categories->render() !!}

@endsection
