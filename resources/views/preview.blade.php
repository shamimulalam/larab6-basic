<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Preview</title>
</head>
<body>
<h1>User Preview</h1>
<hr>
@foreach($result as $r)
    <p>ID : {{ $r->id }}</p>
    <p>Name : {{ $r->name }}</p>
    <p>Email : {{ $r->email }}</p>
    <p>Phone : {{ $r->phone }}</p>
@endforeach
<a href="{{ route('about.form') }}">Back</a>
</body>
</html>
