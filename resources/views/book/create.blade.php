<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new book</title>
</head>
<body>
<h1>Create new book</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('book.store') }}" method="post">
    @csrf
    <input type="text" value="{{ old('name') }}" name="name" placeholder="Enter book name">
    <br>
    <input type="text" value="{{ old('author_name') }}" name="author_name" placeholder="Enter author name">
    <br>
    <input type="date" value="{{ old('publish_date') }}" name="publish_date">
    <br>
    <button>Submit</button>
</form>
</body>
</html>
