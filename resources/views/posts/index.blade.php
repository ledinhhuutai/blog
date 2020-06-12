<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @php($count = 1)
            @foreach($posts as $p)
            <tr>
                <th scope="row">{{$count++}}</th>
                <td>{{ $p->title }}</td>
                <td>{{ $p->author_id }}</td>
                <td>
                    <a href="{{ route('post.show', ['id' => $p->id] ) }}"><button class="btn-sm btn-success">Detail</button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
