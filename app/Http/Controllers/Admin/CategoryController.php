<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryResource::collection(Category::all());
        return Inertia::render('Admin/Category/Index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Category/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'title'=>['required', 'min:3'],
           'image'=>['required', 'image'],
           'description'=>['required', 'min:6'],
        ]);

        if ($request->hasFile('image')){
            $image = $request->file('image')->store('catigories');
            Category::create([
                'title'=>$request->title,
                'image'=>$image,
                'description'=>$request->description,
            ]);
            return Redirect::route('categories.index');
        }

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
//        return Inertia::render('Admin/Category/Edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, Category $category)
//    {
//        $image = $category -> image;
//
//        $request -> validate([
//            'title'=>['required', 'min:3'],
//            'description'=>['required', 'min:6'],
//        ]);
//        if ($request->hasFile('image')){
//            Storage::delete($category->image);
//            $image = $request -> file('image')->store('categories');
//        }
//        $category->update([
//            'name' => $request->name,
//            'image'=> $image,
//            'description'=>$request->description,
//        ]);
//        return Redirect::route('skills.index');
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Storage::delete($category->image);
        $category->delete();

        return Redirect::back();
    }
}
