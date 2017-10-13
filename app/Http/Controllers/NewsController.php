<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\BlogCategory;
use App\Blog;
use App\Tag;
use App\News;
use App\Helper;
use Schema;
use Session;
use App\Http\Controllers\MailController as MailUsers;
class NewsController extends Controller
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
        

        $news = News::all();
        return view('admin.allnews',compact('news')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.addnews');
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
            'picture'=>'required'
            
        ]);

        $news = Helper::makeObject(new News(),$request,"news");
        
        $fileName = time().'.'.$request->file('picture')->getClientOriginalExtension();
        $destinationPath = public_path('images/news');
        $request->file('picture')->move($destinationPath,$fileName);
       
        $news->picture = $fileName;



           

        $news->save();
        MailUsers::sendAll(url("/news_details/".$news->id));

        session()->flash('addnews', 'სიახლე წარმატებით დაემატა');
        return redirect()->route('admin_side.news.index');
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
        
        $news = News::findOrFail($id);
        

        return view('admin.editnews',compact('news'));
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
            'picture'=>'required'
        ]);

        
       $news=Helper::makeObject(News::findOrFail($id),$request,"news");

        if($request->hasFile('picture')){
            $newFile =time().'.'.$request->file('picture')->getClientOriginalExtension();
            $destinationPath = public_path('images/news');
            $request->file('picture')->move($destinationPath,$newFile);
            \File::delete(public_path('images/news/'.$news->picture));
       		$news->picture = $newFile;
        }
       
      
        $news->save();

        return redirect()->route('admin_side.news.index');


    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        \File::delete(public_path('images/news/'.$news->picture));
        $news->delete();
        return redirect()->route('admin_side.news.index'); 
    }

   
}
