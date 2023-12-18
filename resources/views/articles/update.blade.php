<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <form method="post" action="{{ route('articles.update', $data->id) }}">
        @csrf
        @method('put')

        <label for="tasktname">Task Name:</label>
        <input type="text" name="tasktname" value="{{ $data->tasktname }}" required>

        <label for="taskdescription">Task Description:</label>
        <textarea name="taskdescription" required>{{ $data->taskdescription }}</textarea>

        <button type="submit">Update Task</button>
    </form>
</body>
</html>
