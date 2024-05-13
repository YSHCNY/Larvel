@vite(['resources/css/app.css', 'resources/js/app.js'])


<div class="container mx-auto ">
    <div class="p-5  shadow">
    <a href="{{route('all_product')}}" class="btn btn-sm btn-ghost mb-3 border-red-500"> back</a>
        <h1 class = 'font-bold text-gray-700 captalize mb-0'>Update page</h1>
        <p class = 'italic text-gray-400  text-sm'>Edit and Update the information of the image</p>



        <form action = '{{url("/edit_product", $product->id)}}' method = 'post' enctype="multipart/form-data">
    @csrf
    <div>
    <label class="form-control w-full max-w-xs">
  <div class="label">
    <span class="label-text">Product Name</span>
   
  </div>
  <input type="text" name = 'title' value="{{$product->title}}" class="input input-bordered w-full max-w-xs" />
</label>
    </div>

    <div>
    <label class="form-control">
  <div class="label">
    <span class="label-text">Product Description</span>
 
  </div>
  <textarea name = 'description' class="textarea textarea-bordered w h-24" placeholder="Type here...">{{$product->description}}</textarea>
</label>
</div>

<div>
    <label class="form-control w-48">
<div class="label">
    <span class="label-text">Current Image</span>
 
  </div>
  <img src="/product/{{$product->image}}" class = 'object-fit h-32' alt="" srcset="">
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


    <div class = 'text-end my-5'>
    
    <button type = 'submit' class="btn btn-neutral">Update</button>
    </div>
    
</form>





    </div>
</div>