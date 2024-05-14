<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    // when web api gets the route of controller, classes are being read depending on class that being called when routing
    // sample here is index Route::get('/', [HomeController::class,'index']); which returns "view" (folder) and displays "home" (home.blade.php)
    public function index(){
        return view('home');
    }


  // function to fetch and get id to update view
    public function update_product($id){
        // fetch id from table products
        $product = Product::find($id);

        // returns blade view (product_update) while getting the id of $data using compact
        return view ('product_update',compact('product'));
    }


    // function to diusplay product
    public function show_product(){

        // fetching product table
        $data = Product::all();
        return view('product', compact('data'));
    }




    // a fuction opf add_product class that requests to table / db with a method of request 
    public function add_product(Request $request){

        $request->validate(
            [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            ],
            [
                'title.required' => 'title is required bro',
                'description.required' => 'give small description bro',
                'image.required' => 'where is your image bro',

            ]
    
    
    
    );

        // assigning new Product (table) to $data (variable)
        $data = new Product;

        // calling coloumns "pairing" $data is the variable from above and -> title is from table products
        //whilist $request is our request variable ->title is from input that is being named title
        $data->title = $request->title;
        $data->description = $request->description;

        //image line is for getting image content from the form being requested/posted
        $image = $request->image;

        //make statement if image is empty so itll not error
        if($image){
         // changing image name using time function
        // $imagename=time().'.'.$image->getClientOriginalExtension();
        $imagename = time().'.'.$image->getClientOriginalExtension(); 
        // storing image and name to project folder(public)
        $request->image->move('product', $imagename);
        // storing image to database
        $data->image=$imagename;

        }
      
        $data->save(); //this line saves the requested data from the form to the table "products"

        return redirect()->back(); //this refreshes data back to the same module so it doesnt redirect to contol page
    }



    // function to delete product per id
    public function delete_product($id){
        // fetching id of product from table
        $data = Product::find($id);
        // action to delte product
        $data->delete();
        // stays on same page after performing the delte action
        return redirect()->back();
    }


    public function view_product($id){
        $data = Product::find($id);
        return view ('display_product', compact('data'));
    }


    public function edit_product(Request $request, $id){

        $data = Product::find($id);
        // after fetching data $data->(coloumn) compares request from $request->(input name) base on id
        $data->title = $request->title;
        $data->description = $request->description;

        // image that is being requested is stored in $image (file input)
        $image = $request->image;

        // then $image is in a if statment to see if the image has content or none
        if($image){
            // the new image then is being name with the current date
            $imagename = time().'.'.$image->getClientOriginalExtension();
            // the request is being set to the same path of images
            $request->image->move('product', $imagename);

            // the data then is being replaced based on the new uploaded image BASED ON THE ID of the requested item
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();
    }
  

  
}
