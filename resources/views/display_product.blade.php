@vite(['resources/css/app.css', 'resources/js/app.js'])



<div class="container mx-auto my-5">

<div class="p-5 shadow-lg border">
<a href="{{route('all_product')}}" class="btn btn-sm btn-ghost mb-3 border-red-500">back</a>
<div class="my-4">
<h1 class = 'text-lg font-bold uppercase text-center text-gray-700'>{{$data->title}}</h1>
<p class = 'text-center text-gray-400'>{{$data->description}}</p>
</div>

<img src="/product/{{$data->image}}" alt="">
</div>


</div>