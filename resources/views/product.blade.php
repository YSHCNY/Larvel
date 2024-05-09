<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>





<div class="container mx-auto">
<div class=" p-5 shadow rounded-md mt-5">
<div>
    <a href="{{url('/')}}" class="btn btn-sm btn-ghost mb-3 border-red-500"> back</a>
<p class="fw-bold ">All products</p>
    <p class = 'italic  text-gray-400 text-sm'>Displaying of all products</p>
</div>
    <div class="overflow-x-auto">
  <table class="table table-zebra table-lg">
    <!-- head -->
    <thead>
      <tr>
      <th>Date Created</th>
        <th>Name of product</th>
        <th>Description</th>
        <th>Image</th>
   
      </tr>
    </thead>
    <tbody>
    @foreach($data as $data)

      <tr>
      <td>{{$data->created_at}}</td>
        <th>{{$data->title}}</th>
        <td>{{$data->description}}</td>
        <td>{{$data->image}}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>


</body>
</html>