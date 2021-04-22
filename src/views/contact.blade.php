<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>

    <h1>Contact Us any time</h1>

    <form action="{{route('contact')}}" method="POST">
        @CSRF
        <input type="text" name="name" placeholder="Enter Your Name">
        <input type="email" name="email" placeholder="Enter Your Email">
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
        <input type="submit" value="Sumbit">
    </form>

</body>
</html>
