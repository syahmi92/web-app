<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
</head>
<body>
    @foreach ($tasks as $task)
        <li>{{$task-> name}} | {{$task-> status}}</li>
    @endforeach

    {{ $tasks->links() }}
</body>
</html>