<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Form</title>
</head>
<body>
    <h1>About Form</h1>
    <form action="{{ route('preview') }}" method="post">
        @csrf
        <input type="text" name="full_name" placeholder="Enter your name">
        <br>
        <input type="email" name="email_address" placeholder="Enter your email address">
        <br>
        <input type="text" name="phone_number" placeholder="Enter your phone number">
        <br>
        <button>Preview</button>
    </form>
</body>
</html>
