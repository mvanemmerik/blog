<!DOCTYPE html>
<html>
<head>
    <title>Task</title>
</head>
<body><div id="wrapper" class="table-responsive">
    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="/tasks/{{ $task->id }}">
                    {{$task->body }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
