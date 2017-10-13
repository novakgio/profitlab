<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\BlogCategory;
use App\Blog;
use App\Tag;
use App\Helper;
use Schema;
use Session;
use App\Http\Controllers\MailController as MailUsers;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function validateMakeBlog(){

    }
    public function index()
    {
        

        $blogs = Blog::all();
        return view('admin.allblogs',compact('blogs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategories = BlogCategory::all();
        return view('admin.addblog',compact('blogCategories'));
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
            'title' => 'required|min:5',
            'body'=>'required|min:30',
            'picture'=>'required',
            'blog_category_id'=>'required'
        ]);

        $blog = Helper::makeObject(new Blog(),$request,"blogs");
        
        $fileName = time().'.'.$request->file('picture')->getClientOriginalExtension();
        $destinationPath = public_path('images/blog');
        $request->file('picture')->move($destinationPath,$fileName);
       
        $blog->picture = $fileName;

           

        $blog->save();
        MailUsers::sendAll(url("/blog_details/".$blog->id));
        session()->flash('addblog', 'ბლოგი წარმატებით დაემატა');
        return redirect()->route('admin_side.blog.index');
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
    public function edit($id)
    { 
        $blogCategories  = BlogCategory::pluck('name','id');
        $blog = Blog::findOrFail($id);
        

        return view('admin.editBlog',compact('blog','blogCategories'));
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
            'title' => 'required|min:5',
            'body'=>'required|min:30',
            'blog_category_id'=>'required'
        ]);

        
       $blog=Helper::makeObject(Blog::findOrFail($id),$request,"blogs");

        if($request->hasFile('picture')){
            $newFile =time().'.'.$request->file('picture')->getClientOriginalExtension();
            $destinationPath = public_path('images/blog');
            $request->file('picture')->move($destinationPath,$newFile);
            \File::delete(public_path('images/blog/'.$blog->picture));
            $blog->picture = $newFile;
        }
        $blog->save();
        return redirect()->route('admin_side.blog.index');


    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        \File::delete(public_path('images/blog/'.$blog->picture));
        $blog->delete();
        return redirect()->route('admin_side.blog.index'); 
    }

   
}
