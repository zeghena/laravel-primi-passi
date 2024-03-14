<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>{{ $title }}</h1>

<h3>{{ $paragraph }}</h3>

<hr>

<h3>{{$class}}</h3>

<ul>
        @foreach ( $students as $student )

    <li>{{$student}}</li>

        @endforeach

</ul>

</body>
</html>
