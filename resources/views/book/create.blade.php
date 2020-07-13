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
<form action="{{ route('book.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter book name">
    <br>
    <input type="text" name="author_name" placeholder="Enter author name">
    <br>
    <input type="date" name="publish_date" >
    <br>
    <button>Submit</button>
</form>
</body>
</html>
