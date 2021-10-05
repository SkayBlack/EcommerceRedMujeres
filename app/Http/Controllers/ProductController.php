<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::all();
        $products = product::paginate(10);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $product = new product();
        return view('product.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => ['required', 'string', 'max:30'],
            'quantity'    => ['required', 'numeric'],
            'price'       => ['required', 'numeric'],
            'size'        => ['required', 'string'],
            'description' => ['nullable', 'string', 'max:500'],
            'images'      => ['nullable', 'image'],
        ]);

        $data = request()->except('_token'); 

        if($request->hasFile('images')){
            $data['images'] = $request->file('images')->store('uploads','public');
        }
        
     
        Product::insert($data);
        //return response()->json($data);
        return redirect()->route('product.index')->with('message', 'Producto agregado');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('product.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = product::findOrFail($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = request()->except(['_token','_method']);

        if($request->hasFile('images')){
            $product=product::findOrFail($id);
            Storage::delete('public/'.$product->images);
            $data['images'] = $request->file('images')->store('uploads','public');
        }

        product::where('id','=',$id)->update($data);  
        $product = product::findOrFail($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $productPhoto = product::findOrFail($id);

        if(Storage::delete('public/'.$productPhoto->images)){
            product::destroy($id);
        }
        
        return redirect('product')->with('message','Producto Borrado');
    }
}
