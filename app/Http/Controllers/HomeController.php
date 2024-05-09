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

    // a fuction opf add_product class that requests to table / db with a method of request 
    public function add_product(Request $request){

        // assigning new Product (table) to $data (variable)
        $data = new Product;

        // calling coloumns "pairing" $data is the variable from above and -> title is from table products
        //whilist $request is our request variable ->title is from input that is being named title
        $data->title = $request->title;
        $data->description = $request->description;

        //image line is for getting image content from the form being requested/posted
        $image = $request->image;
        // changing image name using time function
        // $imagename=time().'.'.$image->getClientOriginalExtension();
        $imagename = 'savedimage'.'.'.$image->getClientOriginalExtension(); 
        // storing image and name to project folder(public)
        $request->image->move('product', $imagename);
        // storing image to database
        $data->image=$imagename;

        $data->save(); //this line saves the requested data from the form to the table "products"

        return redirect()->back(); //this refreshes data back to the same module so it doesnt redirect to contol page
    }
}
