<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogCategory;
use App\Http\Requests;
use Session;
use Schema;
class BlogControllerCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategories  = BlogCategory::all();

        return view('admin.addBlogCategory',compact('blogCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $blogCategory = new BlogCategory();
        $blogCategory_columns = Schema::getColumnListing('blog_categories');

        foreach($blogCategory_columns as $category_column){

            if(in_array($category_column,array_keys($request->all()))){
                $blogCategory->$category_column = $request->$category_column;
                
            }
        }
        $blogCategory->save();
        session()->flash('addblogcategory', 'ბლოგის კატეგორია წარმატებით დაემატა');
        return redirect()->route('admin_side.blogcategory.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $blogCategory = BlogCategory::findOrFail($id);
        return view('admin.editBlogCategory',compact('blogCategory'));
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
        $this->validate($request, [
            'name' => 'required',
        ]);
        $blogCategory = BlogCategory::findOrFail($id);
        $blogCategory->name = $request->name;
        $blogCategory->save();
         return redirect()->route('admin_side.blogcategory.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $blogCategory = BlogCategory::findOrFail($id)->delete();
        Blog::where('blog_category_id','=',$id)->delete();
        return redirect()->route('admin_side.blogcategory.create');
    }

    
}
