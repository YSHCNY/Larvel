<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Laravel Crud</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class = ' container flex mx-auto '>
  
    <div class="shadow p-9 m-4  mx-auto w-auto justify-center items-center ">
<p class = 'font-bold mb-0'>Add Product</p>
<p class = ' italic text-gray-400 text-sm'>Crud practice for laravel</p> 
<div class="float-end my-3">
<a class = 'btn btn-primary' href="{{url('show_product')}}">Show Products</a>
</div>
<div class = ' mt-4'>
<form action = '{{url("/add_product")}}' method = 'post' enctype="multipart/form-data">
    @csrf
    <div>
    <label class="form-control w-full max-w-xs">
  <div class="label">
    <span class="label-text">Product Name</span>
   
  </div>
  <input type="text" name = 'title' placeholder="Type here" class="input input-bordered w-full max-w-xs" />
</label>
    </div>

    <div>
    <label class="form-control">
  <div class="label">
    <span class="label-text">Product Description</span>
 
  </div>
  <textarea name = 'description' class="textarea textarea-bordered h-24" placeholder="Type here..."></textarea>
</label>
</div>


    <div>
    <label class="form-control w-full max-w-xs">
  <div class="label">
    <span class="label-text">Pick a file</span>

  </div>
  <input type="file" name = 'image' class="file-input file-input-bordered w-full max-w-xs" />

</label>
    </div>


    <div class = 'float-end my-5'>
    
    <button type = 'submit' class="btn btn-neutral">Add</button>
    </div>
    
</form>


</div>


</div>

</div>


    
</body>
</html>