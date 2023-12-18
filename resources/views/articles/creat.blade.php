<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="">
        <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>

    </head>
    <body>
    <div class="mx-52 mt-32 border-2 rounded-lg shadow-xl shadow-slate-150 flex justify-center ">
    <form method="post" action="{{ route('articles.store') }}">
    @csrf

            <div class="mx-1 my-3">
                <label class="font-mono font-light text-lg">Task Name :</label>
               <div class=" border-2  border-slate-100  rounded-lg " >
                <input class= "h-26"type="text" name="tasktname" placeholder="The name of the task" />
                </div>
              <div>

            <div class="mx-1 my-8">
            <label class="font-mono font-light text-lg">Description :</label>
               <div class="  border-2  border-slate-100  rounded-lg " >
                <input class="  h-56 border-2  border-slate-100  rounded-lg " type="text" name="taskdescription" />
            </div>
            </div>

            <div class="mx-3 my-1">

                <input class="inline-block px-12 py-3 text-sm font-medium text-black border-2  border-gray-400  rounded-lg  hover:bg-gray-600 hover:text-white" type="submit" name="submit"/>
            </div>
        </form>
    </div>
        <script src="" async defer></script>
    </body>
</html>