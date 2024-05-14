<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>






<div class="container  mx-auto">
<div class=" p-5 shadow rounded-md mt-5 ">
<div>
    <a href="{{route('home')}}" class="btn btn-sm btn-ghost mb-3 border-red-500"> back</a>
<p class="fw-bold ">All products</p>
    <p class = 'italic  text-gray-400 text-sm'>Displaying of all products</p>
</div>

    <div class="m-5 border p-6 rounded-md">
 
    @forelse ($data as $data)

    <div class="grid grid-rows-2 md:grid-flow-col grid-flow-row ">
      <div class ='row-span-2'>
        <div class ='my-2'>
          <center>
        <img class = 'object-cover h-48 w-96 '  src = "product/{{$data->image}}">
        </center>
        </div>
      </div>
      <div class="row-span-2">
        <p class = ' text-gray-400 italic'>{{$data->created_at}}</p>
        <p class = ' capitalize text-lg font-bold mb-0 text-gray-700'>{{$data->title}}</p>
        <p class = 'text-sm capitalize'>{{$data->description}}</p>
        <div class = 'p-2 border-t mt-4'>
          <p class="text-sm text-gray-500 mb-2 italic">Action:</p>
          <a href="{{route('display',$data->id)}}" class = 'btn btn-sm btn-accent'>View</a>
        <a href="{{route('update',$data->id)}}" class = 'btn btn-sm btn-outline btn-accent'>Edit</a>
     
        <a onclick = "return confirm('are you sure you want to delete this?');" href="{{url('delete_product', $data->id)}}" class = 'btn btn-sm btn-outline '>Delete</a>
        </div>
        </div> 
        </div>
      @empty
      
        <p  class="text-center">No data Available</p>
     
      @endforelse

</div>


</div>
</div>


</body>
</html>