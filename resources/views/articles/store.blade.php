<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="p-8">

    <h1 class="text-2xl font-bold mb-4">Task created successfully!</h1>

    <table class="min-w-full border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 py-2 px-4">Task Name</th>
                <th class="border border-gray-300 py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td class="border border-gray-300 py-2 px-4">{{ $task->tasktname }}</td>
                <td class="border border-gray-300 py-2 px-4">
                    <form method="post" action="{{ route('articles.update', $task->id) }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700">Edit</button>
                    </form>
                    <form method="post" action="{{ route('articles.delet', $task->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-700 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
