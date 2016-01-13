<!--resources/views/categories/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{!! URL::to('categories') !!}">Category Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{!! URL::to('categories') !!}">View All Category</a></li>
        <li><a href="{!! URL::to('categories/create') !!}">Create a Category</a>
    </ul>
</nav>

@yield('content')

</div>
</body>
</html>
