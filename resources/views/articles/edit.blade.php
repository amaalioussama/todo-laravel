<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
</head>
<body class="mx-52 my-52 border-2 rounded-lg shadow-xl shadow-slate-150 flex justify-center">
<div class="mx-52 mt-32 border-2 rounded-lg shadow-xl shadow-slate-150 flex justify-center ">
    <form method="post" action="{{ route('articles.update', $data->id) }}">
        @csrf
        @method('PUT')


        <div class="mx-1 my-3">
                <label class="font-mono font-light text-lg">Task Name :</label>
                <div class=" border-2  border-slate-100  rounded-lg " >
            <input class="border-2 border-slate-100 rounded-lg" type="text" name="tasktname" value="{{ old('tasktname', $data->tasktname) }}" placeholder="The name of the task" />
            </div>
        </div>

        <div>

         <div class="mx-1 my-8">
         <label class="font-mono font-light text-lg">Description :</label>
         <div class="  border-2  border-slate-100  rounded-lg " >
            <input class="border-2 border-slate-100 rounded-lg" type="text" name="taskdescription" value="{{ old('taskdescription', $data->taskdescription) }}" placeholder="Description" />
        </div>
         </div>
         <div class="mx-3 my-1">

<input class="inline-block px-12 py-3 text-sm font-medium text-black border-2  border-gray-400  rounded-lg  hover:bg-gray-600 hover:text-white" type="submit" name="submit"/>
</div>
    </form>
</div>
</body>
</html>











