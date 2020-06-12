<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="{{ route('posts.index') }}"><button class="btn btn-warning">Click here</button></a>
        <div class="jumbotron">
            <h1 class="display-4">Title: {{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
            <hr class="my-4">
            <p>{{ $post->short_desc }}</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">{{ $post->author_id }}</a>
        </div>
    </div>
</body>
</html>
