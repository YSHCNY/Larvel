@vite(['resources/css/app.css', 'resources/js/app.js'])


<div class="container mx-auto ">
    <div class="p-5  shadow">
    <a href="{{route('all_product')}}" class="btn btn-sm btn-ghost mb-3 border-red-500"> back</a>
        <h1 class = 'text-center font-bold text-gray-700 captalize mb-0'>Update page</h1>
        <p class = 'italic text-gray-400 text-center text-sm'>Edit and Update the information of the image</p>

        {{$product->title}}
        {{$product->description}}
        <img src="/product/{{$product->image}}" alt="" srcset="">
    </div>
</div>