<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new Author</title>
</head>
<body>
<h1>Create new Author</h1>
<hr>
<form action="{{ route('author.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter author name">
    <br>
    <input type="email" name="email" placeholder="Enter author email">
    <br>
    <input type="date" name="date_of_birth" placeholder="Select authors date of birth">
    <br>
    <button type="submit">Store</button>
</form>
</body>
</html>
