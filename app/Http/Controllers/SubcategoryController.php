<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Subcategory::all();
        return view('pages.sub-category.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $n['categories'] = category::all();
        return view('pages.sub-category.create',$n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubcategoryRequest $request)
    {
        // dd($request->title);
        Subcategory::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('admin.subcategory.index')->with('success',"$request->title created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        return view('pages.sub-category.edit',['mdata' => $subcategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubcategoryRequest $request, Subcategory $category)
    {
        $category->update([
            'name'=>$request->name,
            'category_id'=>$request->category_id
        ]);

        return redirect()->route('admin.subcategory.index')->with('success', "$request->title updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
