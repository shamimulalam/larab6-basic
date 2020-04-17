<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Author</title>
</head>
<body>
<h1>Edit Author</h1>
<hr>
<form action="{{ route('author.update',$author->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{ $author->name }}" placeholder="Enter author name">
    <br>
    <input type="email" name="email" value="{{ $author->email }}" placeholder="Enter author email">
    <br>
    <input type="date" name="date_of_birth" value="{{ $author->date_of_birth }}" placeholder="Select authors date of birth">
    <br>
    <button type="submit">Update</button>
</form>
</body>
</html>
