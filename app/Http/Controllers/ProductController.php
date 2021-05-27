<?php

namespace App\Http\Controllers;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products=DB::table('products')->orderBy('id','DESC') ->paginate(3);
        return view ('admin.products.index',compact('products'));
    }
    public function create()
    {
        return view('admin.products.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
  
       $data=array();
       $data['name']=$request->name;
       $data['details']=$request->details;
       $data['quantity']=$request->quantity;
       $data['price']=$request->price;
       DB::table('products')->insert($data);
   
        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');
    }

    public function show()
    {
        return view('admin.products.show');
    }
    public function edit()
    {
        return view('admin.products.edit');
    }

}
