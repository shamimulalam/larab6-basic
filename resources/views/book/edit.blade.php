<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit book</title>
</head>
<body>
<h1>Edit book</h1>
<form action="{{ route('book.update',$book->id) }}" method="post">
    @method('put')
    @csrf
    <input type="text" name="name" value="{{ $book->name }}" placeholder="Enter book name">
    <br>
    <input type="text" name="author_name" value="{{ $book->author_name }}" placeholder="Enter author name">
    <br>
    <input type="date" name="publish_date" value="{{ $book->publish_date }}" >
    <br>
    <button>Submit</button>
</form>
</body>
</html>
