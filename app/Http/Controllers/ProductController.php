<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Product::with('category','subcat')->get();
        return view('pages.product.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $n['categories'] = category::all();
        return view('pages.product.create',$n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request->title);
        if($request->img){
            $path = $request->file('img')->store('product', 'public');

        }
        $data = $request->all();
        $data['img'] = $path;
        Product::create($data);
        return redirect()->route('admin.product.index')->with('success',"$request->name created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $Product)
    {
        $n['mdata'] = Product::with('category','subcat')->find($Product->id);
        $n['categories'] = category::all();

        return view('pages.product.edit',$n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = [
            'name' => $request->name,
            'short_des' => $request->short_des,
            'des' => $request->des,
            'sku' => $request->sku,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
        ];
        if ($request->img) {
            Storage::delete($product->img);
            $path = $request->file('img')->store('product', 'public');
            $data['img'] = $path;
        }
        $product->update($data);


        return redirect()->route('admin.product.index')->with('success', "$request->name updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
